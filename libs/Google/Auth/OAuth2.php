<?php 
namespace Google\Auth;
class OAuth2 extends \Google\Auth\AbstractAuth
{
  const OAUTH2_REVOKE_URI = 'https://accounts.google.com/o/oauth2/revoke';
  const OAUTH2_TOKEN_URI = 'https://accounts.google.com/o/oauth2/token';
  const OAUTH2_AUTH_URL = 'https://accounts.google.com/o/oauth2/auth';
  const CLOCK_SKEW_SECS = 300; // five minutes in seconds
  const AUTH_TOKEN_LIFETIME_SECS = 300; // five minutes in seconds
  const MAX_TOKEN_LIFETIME_SECS = 86400; // one day in seconds
  const OAUTH2_ISSUER = 'accounts.google.com';

  /** @var \Google\Auth\AssertionCredentials $assertionCredentials */
  private $assertionCredentials;

  /**
   * @var string The state parameters for CSRF and other forgery protection.
   */
  private $state;

  /**
   * @var array The token bundle.
   */
  private $token = array();

  /**
   * @var \Google\Client the base client
   */
  private $client;

  /**
   * Instantiates the class, but does not initiate the login flow, leaving it
   * to the discretion of the caller.
   */
  public function __construct(\Google\Client $client)
  {
    $this->client = $client;
  }

  /**
   * Perform an authenticated / signed apiHttpRequest.
   * This function takes the apiHttpRequest, calls apiAuth->sign on it
   * (which can modify the request in what ever way fits the auth mechanism)
   * and then calls apiCurlIO::makeRequest on the signed request
   *
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request The resulting HTTP response including the
   * responseHttpCode, responseHeaders and responseBody.
   */
  public function authenticatedRequest(\Google\Http\Request $request)
  {
    $request = $this->sign($request);
    return $this->client->getIo()->makeRequest($request);
  }

  /**
   * @param string $code
   * @throws \Google\Auth\Exception
   * @return string
   */
  public function authenticate($code)
  {
    if (strlen($code) == 0) {
      throw new \Google\Auth\Exception("Invalid code");
    }

    // We got here from the redirect from a successful authorization grant,
    // fetch the access token
    $request = new \Google\Http\Request(
        self::OAUTH2_TOKEN_URI,
        'POST',
        array(),
        array(
          'code' => $code,
          'grant_type' => 'authorization_code',
          'redirect_uri' => $this->client->getClassConfig($this, 'redirect_uri'),
          'client_id' => $this->client->getClassConfig($this, 'client_id'),
          'client_secret' => $this->client->getClassConfig($this, 'client_secret')
        )
    );
    $request->disableGzip();
    $response = $this->client->getIo()->makeRequest($request);

    if ($response->getResponseHttpCode() == 200) {
      $this->setAccessToken($response->getResponseBody());
      $this->token['created'] = time();
      return $this->getAccessToken();
    } else {
      $decodedResponse = json_decode($response->getResponseBody(), true);
      if ($decodedResponse != null && $decodedResponse['error']) {
        $decodedResponse = $decodedResponse['error'];
      }
      throw new \Google\Auth\Exception(
          sprintf(
              "Error fetching OAuth2 access token, message: '%s'",
              $decodedResponse
          ),
          $response->getResponseHttpCode()
      );
    }
  }

  /**
   * Create a URL to obtain user authorization.
   * The authorization endpoint allows the user to first
   * authenticate, and then grant/deny the access request.
   * @param string $scope The scope is expressed as a list of space-delimited strings.
   * @return string
   */
  public function createAuthUrl($scope)
  {
    $params = array(
        'response_type' => 'code',
        'redirect_uri' => $this->client->getClassConfig($this, 'redirect_uri'),
        'client_id' => $this->client->getClassConfig($this, 'client_id'),
        'scope' => $scope,
        'access_type' => $this->client->getClassConfig($this, 'access_type'),
        'approval_prompt' => $this->client->getClassConfig($this, 'approval_prompt'),
    );

    // If the list of scopes contains plus.login, add request_visible_actions
    // to auth URL.
    $rva = $this->client->getClassConfig($this, 'request_visible_actions');
    if (strpos($scope, 'plus.login') && strlen($rva) > 0) {
        $params['request_visible_actions'] = $rva;
    }

    if (isset($this->state)) {
      $params['state'] = $this->state;
    }

    return self::OAUTH2_AUTH_URL . "?" . http_build_query($params, '', '&');
  }

  /**
   * @param string $token
   * @throws \Google\Auth\Exception
   */
  public function setAccessToken($token)
  {
    $token = json_decode($token, true);
    if ($token == null) {
      throw new \Google\Auth\Exception('Could not json decode the token');
    }
    if (! isset($token['access_token'])) {
      throw new \Google\Auth\Exception("Invalid token format");
    }
    $this->token = $token;
  }

  public function getAccessToken()
  {
    return json_encode($this->token);
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function setAssertionCredentials(\Google\Auth\AssertionCredentials $creds)
  {
    $this->assertionCredentials = $creds;
  }

  /**
   * Include an accessToken in a given apiHttpRequest.
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request
   * @throws \Google\Auth\Exception
   */
  public function sign(\Google\Http\Request $request)
  {
    // add the developer key to the request before signing it
    if ($this->client->getClassConfig($this, 'developer_key')) {
      $request->setQueryParam('key', $this->client->getClassConfig($this, 'developer_key'));
    }

    // Cannot sign the request without an OAuth access token.
    if (null == $this->token && null == $this->assertionCredentials) {
      return $request;
    }

    // Check if the token is set to expire in the next 30 seconds
    // (or has already expired).
    if ($this->isAccessTokenExpired()) {
      if ($this->assertionCredentials) {
        $this->refreshTokenWithAssertion();
      } else {
        if (! array_key_exists('refresh_token', $this->token)) {
            throw new \Google\Auth\Exception(
                "The OAuth 2.0 access token has expired,"
                ." and a refresh token is not available. Refresh tokens"
                ." are not returned for responses that were auto-approved."
            );
        }
        $this->refreshToken($this->token['refresh_token']);
      }
    }

    // Add the OAuth2 header to the request
    $request->setRequestHeaders(
        array('Authorization' => 'Bearer ' . $this->token['access_token'])
    );

    return $request;
  }

  /**
   * Fetches a fresh access token with the given refresh token.
   * @param string $refreshToken
   * @return void
   */
  public function refreshToken($refreshToken)
  {
    $this->refreshTokenRequest(
        array(
          'client_id' => $this->client->getClassConfig($this, 'client_id'),
          'client_secret' => $this->client->getClassConfig($this, 'client_secret'),
          'refresh_token' => $refreshToken,
          'grant_type' => 'refresh_token'
        )
    );
  }

  /**
   * Fetches a fresh access token with a given assertion token.
   * @param \Google\Auth\AssertionCredentials $assertionCredentials optional.
   * @return void
   */
  public function refreshTokenWithAssertion($assertionCredentials = null)
  {
    if (!$assertionCredentials) {
      $assertionCredentials = $this->assertionCredentials;
    }

    $cacheKey = $assertionCredentials->getCacheKey();

    if ($cacheKey) {
      // We can check whether we have a token available in the
      // cache. If it is expired, we can retrieve a new one from
      // the assertion.
      $token = $this->client->getCache()->get($cacheKey);
      if ($token) {
        $this->setAccessToken($token);
      }
      if (!$this->isAccessTokenExpired()) {
        return;
      }
    }

    $this->refreshTokenRequest(
        array(
          'grant_type' => 'assertion',
          'assertion_type' => $assertionCredentials->assertionType,
          'assertion' => $assertionCredentials->generateAssertion(),
        )
    );

    if ($cacheKey) {
      // Attempt to cache the token.
      $this->client->getCache()->set(
          $cacheKey,
          $this->getAccessToken()
      );
    }
  }

  private function refreshTokenRequest($params)
  {
    $http = new \Google\Http\Request(
        self::OAUTH2_TOKEN_URI,
        'POST',
        array(),
        $params
    );
    $http->disableGzip();
    $request = $this->client->getIo()->makeRequest($http);

    $code = $request->getResponseHttpCode();
    $body = $request->getResponseBody();
    if (200 == $code) {
      $token = json_decode($body, true);
      if ($token == null) {
        throw new \Google\Auth\Exception("Could not json decode the access token");
      }

      if (! isset($token['access_token']) || ! isset($token['expires_in'])) {
        throw new \Google\Auth\Exception("Invalid token format");
      }

      $this->token['access_token'] = $token['access_token'];
      $this->token['expires_in'] = $token['expires_in'];
      $this->token['created'] = time();
    } else {
      throw new \Google\Auth\Exception("Error refreshing the OAuth2 token, message: '$body'", $code);
    }
  }

  /**
   * Revoke an OAuth2 access token or refresh token. This method will revoke the current access
   * token, if a token isn't provided.
   * @throws \Google\Auth\Exception
   * @param string|null $token The token (access token or a refresh token) that should be revoked.
   * @return boolean Returns True if the revocation was successful, otherwise False.
   */
  public function revokeToken($token = null)
  {
    if (!$token) {
      if (!$this->token) {
        // Not initialized, no token to actually revoke
        return false;
      } elseif (array_key_exists('refresh_token', $this->token)) {
        $token = $this->token['refresh_token'];
      } else {
        $token = $this->token['access_token'];
      }
    }
    $request = new \Google\Http\Request(
        self::OAUTH2_REVOKE_URI,
        'POST',
        array(),
        "token=$token"
    );
    $request->disableGzip();
    $response = $this->client->getIo()->makeRequest($request);
    $code = $response->getResponseHttpCode();
    if ($code == 200) {
      $this->token = null;
      return true;
    }

    return false;
  }

  /**
   * Returns if the access_token is expired.
   * @return bool Returns True if the access_token is expired.
   */
  public function isAccessTokenExpired()
  {
    if (!$this->token || !isset($this->token['created'])) {
      return true;
    }

    // If the token is set to expire in the next 30 seconds.
    $expired = ($this->token['created']
        + ($this->token['expires_in'] - 30)) < time();

    return $expired;
  }

  // Gets federated sign-on certificates to use for verifying identity tokens.
  // Returns certs as array structure, where keys are key ids, and values
  // are PEM encoded certificates.
  private function getFederatedSignOnCerts()
  {
    return $this->retrieveCertsFromLocation(
        $this->client->getClassConfig($this, 'federated_signon_certs_url')
    );
  }

  /**
   * Retrieve and cache a certificates file.
   * @param $url location
   * @return array certificates
   */
  public function retrieveCertsFromLocation($url)
  {
    // If we're retrieving a local file, just grab it.
    if ("http" != substr($url, 0, 4)) {
      $file = file_get_contents($url);
      if ($file) {
        return json_decode($file, true);
      } else {
        throw new \Google\Auth\Exception(
            "Failed to retrieve verification certificates: '" .
            $url . "'."
        );
      }
    }

    // This relies on makeRequest caching certificate responses.
    $request = $this->client->getIo()->makeRequest(
        new \Google\Http\Request(
            $url
        )
    );
    if ($request->getResponseHttpCode() == 200) {
      $certs = json_decode($request->getResponseBody(), true);
      if ($certs) {
        return $certs;
      }
    }
    throw new \Google\Auth\Exception(
        "Failed to retrieve verification certificates: '" .
        $request->getResponseBody() . "'.",
        $request->getResponseHttpCode()
    );
  }

  /**
   * Verifies an id token and returns the authenticated apiLoginTicket.
   * Throws an exception if the id token is not valid.
   * The audience parameter can be used to control which id tokens are
   * accepted.  By default, the id token must have been issued to this OAuth2 client.
   *
   * @param $id_token
   * @param $audience
   * @return \Google\Auth\LoginTicket
   */
  public function verifyIdToken($id_token = null, $audience = null)
  {
    if (!$id_token) {
      $id_token = $this->token['id_token'];
    }
    $certs = $this->getFederatedSignonCerts();
    if (!$audience) {
      $audience = $this->client->getClassConfig($this, 'client_id');
    }

    return $this->verifySignedJwtWithCerts($id_token, $certs, $audience, self::OAUTH2_ISSUER);
  }

  /**
   * Verifies the id token, returns the verified token contents.
   *
   * @param $jwt the token
   * @param $certs array of certificates
   * @param $required_audience the expected consumer of the token
   * @param [$issuer] the expected issues, defaults to Google
   * @param [$max_expiry] the max lifetime of a token, defaults to MAX_TOKEN_LIFETIME_SECS
   * @return token information if valid, false if not
   */
  public function verifySignedJwtWithCerts(
      $jwt,
      $certs,
      $required_audience,
      $issuer = null,
      $max_expiry = null
  ) {
    if (!$max_expiry) {
      // Set the maximum time we will accept a token for.
      $max_expiry = self::MAX_TOKEN_LIFETIME_SECS;
    }

    $segments = explode(".", $jwt);
    if (count($segments) != 3) {
      throw new \Google\Auth\Exception("Wrong number of segments in token: $jwt");
    }
    $signed = $segments[0] . "." . $segments[1];
    $signature = \Google\Utils::urlSafeB64Decode($segments[2]);

    // Parse envelope.
    $envelope = json_decode(\Google\Utils::urlSafeB64Decode($segments[0]), true);
    if (!$envelope) {
      throw new \Google\Auth\Exception("Can't parse token envelope: " . $segments[0]);
    }

    // Parse token
    $json_body = \Google\Utils::urlSafeB64Decode($segments[1]);
    $payload = json_decode($json_body, true);
    if (!$payload) {
      throw new \Google\Auth\Exception("Can't parse token payload: " . $segments[1]);
    }

    // Check signature
    $verified = false;
    foreach ($certs as $keyName => $pem) {
      $public_key = new \Google\Verifier\Pem($pem);
      if ($public_key->verify($signed, $signature)) {
        $verified = true;
        break;
      }
    }

    if (!$verified) {
      throw new \Google\Auth\Exception("Invalid token signature: $jwt");
    }

    // Check issued-at timestamp
    $iat = 0;
    if (array_key_exists("iat", $payload)) {
      $iat = $payload["iat"];
    }
    if (!$iat) {
      throw new \Google\Auth\Exception("No issue time in token: $json_body");
    }
    $earliest = $iat - self::CLOCK_SKEW_SECS;

    // Check expiration timestamp
    $now = time();
    $exp = 0;
    if (array_key_exists("exp", $payload)) {
      $exp = $payload["exp"];
    }
    if (!$exp) {
      throw new \Google\Auth\Exception("No expiration time in token: $json_body");
    }
    if ($exp >= $now + $max_expiry) {
      throw new \Google\Auth\Exception(
          sprintf("Expiration time too far in future: %s", $json_body)
      );
    }

    $latest = $exp + self::CLOCK_SKEW_SECS;
    if ($now < $earliest) {
      throw new \Google\Auth\Exception(
          sprintf(
              "Token used too early, %s < %s: %s",
              $now,
              $earliest,
              $json_body
          )
      );
    }
    if ($now > $latest) {
      throw new \Google\Auth\Exception(
          sprintf(
              "Token used too late, %s > %s: %s",
              $now,
              $latest,
              $json_body
          )
      );
    }

    $iss = $payload['iss'];
    if ($issuer && $iss != $issuer) {
      throw new \Google\Auth\Exception(
          sprintf(
              "Invalid issuer, %s != %s: %s",
              $iss,
              $issuer,
              $json_body
          )
      );
    }

    // Check audience
    $aud = $payload["aud"];
    if ($aud != $required_audience) {
      throw new \Google\Auth\Exception(
          sprintf(
              "Wrong recipient, %s != %s:",
              $aud,
              $required_audience,
              $json_body
          )
      );
    }

    // All good.
    return new \Google\Auth\LoginTicket($envelope, $payload);
  }
}
