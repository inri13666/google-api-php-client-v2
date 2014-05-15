<?php 
namespace Google\Auth;
class Simple extends \Google\Auth\AbstractAuth
{
  private $key = null;
  private $client;

  public function __construct(\Google\Client $client, $config = null)
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
    return $this->io->makeRequest($request);
  }

  public function authenticate($code)
  {
    throw new \Google\Auth\Exception("Simple auth does not exchange tokens.");
  }

  public function setAccessToken($accessToken)
  {
    /* noop*/
  }

  public function getAccessToken()
  {
    return null;
  }

  public function createAuthUrl($scope)
  {
    return null;
  }

  public function refreshToken($refreshToken)
  {
    /* noop*/
  }

  public function revokeToken()
  {
    /* noop*/
  }

  public function sign(\Google\Http\Request $request)
  {
    $key = $this->client->getClassConfig($this, 'developer_key');
    if ($key) {
      $request->setQueryParam('key', $key);
    }
    return $request;
  }
}
