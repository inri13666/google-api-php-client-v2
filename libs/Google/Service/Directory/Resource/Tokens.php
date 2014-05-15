<?php 
namespace Google\Service\Directory\Resource;
class Tokens extends \Google\Resource\Service
{

  /**
   * Delete all access tokens issued by a user for an application. (tokens.delete)
   *
   * @param string $userKey
   * Identifies the user in the API request. The value can be the user's primary email address, alias
    * email address, or unique user ID.
   * @param string $clientId
   * The Client ID of the application the token is issued to.
   * @param array $optParams Optional parameters.
   */
  public function delete($userKey, $clientId, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'clientId' => $clientId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get information about an access token issued by a user. (tokens.get)
   *
   * @param string $userKey
   * Identifies the user in the API request. The value can be the user's primary email address, alias
    * email address, or unique user ID.
   * @param string $clientId
   * The Client ID of the application the token is issued to.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Token
   */
  public function get($userKey, $clientId, $optParams = array())
  {
    $params = array('userKey' => $userKey, 'clientId' => $clientId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\Token');
  }
  /**
   * Returns the set of current, valid verification codes for the specified user.
   * (tokens.listTokens)
   *
   * @param string $userKey
   * Identifies the user in the API request. The value can be the user's primary email address, alias
    * email address, or unique user ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Directory\Tokens
   */
  public function listTokens($userKey, $optParams = array())
  {
    $params = array('userKey' => $userKey);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\Tokens');
  }
}
