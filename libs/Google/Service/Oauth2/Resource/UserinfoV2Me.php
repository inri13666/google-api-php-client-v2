<?php 
namespace Google\Service\Oauth2\Resource;
class UserinfoV2Me extends \Google\Resource\Service
{

  /**
   * (me.get)
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
