<?php 
namespace Google\Service\Blogger\Resource;
class Users extends \Google\Resource\Service
{

  /**
   * Gets one user by id. (users.get)
   *
   * @param string $userId
   * The ID of the user to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\User
   */
  public function get($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Blogger\User');
  }
}
