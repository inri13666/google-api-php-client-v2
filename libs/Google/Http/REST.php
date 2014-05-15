<?php 
namespace Google\Http;
class REST
{
  /**
   * Executes a \Google\Http\Request
   *
   * @param \Google\Client $client
   * @param \Google\Http\Request $req
   * @return array decoded result
   * @throws \Google\Service\Exception on server side error (ie: not authenticated,
   *  invalid or malformed post body, invalid url)
   */
  public static function execute(\Google\Client $client, \Google\Http\Request $req)
  {
    $httpRequest = $client->getIo()->makeRequest($req);
    $httpRequest->setExpectedClass($req->getExpectedClass());
    return self::decodeHttpResponse($httpRequest);
  }

  /**
   * Decode an HTTP Response.
   * @static
   * @throws \Google\Service\Exception
   * @param \Google\Http\Request $response The http response to be decoded.
   * @return mixed|null
   */
  public static function decodeHttpResponse($response)
  {
    $code = $response->getResponseHttpCode();
    $body = $response->getResponseBody();
    $decoded = null;

    if ((intVal($code)) >= 300) {
      $decoded = json_decode($body, true);
      $err = 'Error calling ' . $response->getRequestMethod() . ' ' . $response->getUrl();
      if (isset($decoded['error']) &&
          isset($decoded['error']['message'])  &&
          isset($decoded['error']['code'])) {
        // if we're getting a json encoded error definition, use that instead of the raw response
        // body for improved readability
        $err .= ": ({$decoded['error']['code']}) {$decoded['error']['message']}";
      } else {
        $err .= ": ($code) $body";
      }

      $errors = null;
      // Specific check for APIs which don't return error details, such as Blogger.
      if (isset($decoded['error']) && isset($decoded['error']['errors'])) {
        $errors = $decoded['error']['errors'];
      }

      throw new \Google\Service\Exception($err, $code, null, $errors);
    }

    // Only attempt to decode the response, if the response code wasn't (204) 'no content'
    if ($code != '204') {
      $decoded = json_decode($body, true);
      if ($decoded === null || $decoded === "") {
        throw new \Google\Service\Exception("Invalid json in service response: $body");
      }

      if ($response->getExpectedClass()) {
        $class = $response->getExpectedClass();
        $decoded = new $class($decoded);
      }
    }
    return $decoded;
  }

  /**
   * Parse/expand request parameters and create a fully qualified
   * request uri.
   * @static
   * @param string $servicePath
   * @param string $restPath
   * @param array $params
   * @return string $requestUrl
   */
  public static function createRequestUri($servicePath, $restPath, $params)
  {
    $requestUrl = $servicePath . $restPath;
    $uriTemplateVars = array();
    $queryVars = array();
    foreach ($params as $paramName => $paramSpec) {
      if ($paramSpec['type'] == 'boolean') {
        $paramSpec['value'] = ($paramSpec['value']) ? 'true' : 'false';
      }
      if ($paramSpec['location'] == 'path') {
        $uriTemplateVars[$paramName] = $paramSpec['value'];
      } else if ($paramSpec['location'] == 'query') {
        if (isset($paramSpec['repeated']) && is_array($paramSpec['value'])) {
          foreach ($paramSpec['value'] as $value) {
            $queryVars[] = $paramName . '=' . rawurlencode($value);
          }
        } else {
          $queryVars[] = $paramName . '=' . rawurlencode($paramSpec['value']);
        }
      }
    }

    if (count($uriTemplateVars)) {
      $uriTemplateParser = new \Google\Utils\URITemplate();
      $requestUrl = $uriTemplateParser->parse($requestUrl, $uriTemplateVars);
    }

    if (count($queryVars)) {
      $requestUrl .= '?' . implode($queryVars, '&');
    }

    return $requestUrl;
  }
}
