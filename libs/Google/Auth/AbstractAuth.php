<?php 
namespace Google\Auth;
abstract class AbstractAuth
{
  /**
   * An utility function that first calls $this->auth->sign($request) and then
   * executes makeRequest() on that signed request. Used for when a request
   * should be authenticated
   * @param \Google\Http\Request $request
   * @return \Google\Http\Request $request
   */
  abstract public function authenticatedRequest(\Google\Http\Request $request);

  abstract public function authenticate($code);
  abstract public function sign(\Google\Http\Request $request);
  abstract public function createAuthUrl($scope);

  abstract public function refreshToken($refreshToken);
  abstract public function revokeToken();
}
