<?php 
namespace Google\Service\Oauth2\Resource;
class Userinfo extends \Google\Resource\Service
{

  /**
   * (userinfo.get)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Oauth2\Userinfoplus
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Oauth2\Userinfoplus');
  }
}
