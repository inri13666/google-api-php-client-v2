<?php 
namespace Google\Service\Calendar\Resource;
class Colors extends \Google\Resource\Service
{

  /**
   * Returns the color definitions for calendars and events. (colors.get)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Calendar\Colors
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Calendar\Colors');
  }
}
