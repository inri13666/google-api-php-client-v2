<?php 
namespace Google\Service\Drive\Resource;
class About extends \Google\Resource\Service
{

  /**
   * Gets the information about the current user along with Drive API settings
   * (about.get)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeSubscribed
   * When calculating the number of remaining change IDs, whether to include public files the user
    * has opened and shared files. When set to false, this counts only change IDs for owned files and
    * any shared or public files that the user has explicitly added to a folder they own.
   * @opt_param string maxChangeIdCount
   * Maximum number of remaining change IDs to count
   * @opt_param string startChangeId
   * Change ID to start counting from when calculating number of remaining change IDs
   * @return \Google\Service\Drive\About
   */
  public function get($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Drive\About');
  }
}
