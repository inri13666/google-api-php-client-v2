<?php 
namespace Google\Service\Directory\Resource;
class Chromeosdevices extends \Google\Resource\Service
{

  /**
   * Retrieve Chrome OS Device (chromeosdevices.get)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $deviceId
   * Immutable id of Chrome OS Device
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @return \Google\Service\Directory\ChromeOsDevice
   */
  public function get($customerId, $deviceId, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'deviceId' => $deviceId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Directory\ChromeOsDevice');
  }
  /**
   * Retrieve all Chrome OS Devices of a customer (paginated)
   * (chromeosdevices.listChromeosdevices)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Column to use for sorting results
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @opt_param int maxResults
   * Maximum number of results to return. Default is 100
   * @opt_param string pageToken
   * Token to specify next page in the list
   * @opt_param string sortOrder
   * Whether to return results in ascending or descending order. Only of use when orderBy is also
    * used
   * @opt_param string query
   * Search string in the format given at
    * http://support.google.com/chromeos/a/bin/answer.py?hl=en=1698333
   * @return \Google\Service\Directory\ChromeOsDevices
   */
  public function listChromeosdevices($customerId, $optParams = array())
  {
    $params = array('customerId' => $customerId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Directory\ChromeOsDevices');
  }
  /**
   * Update Chrome OS Device. This method supports patch semantics.
   * (chromeosdevices.patch)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $deviceId
   * Immutable id of Chrome OS Device
   * @param Google_ChromeOsDevice $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @return \Google\Service\Directory\ChromeOsDevice
   */
  public function patch($customerId, $deviceId, \Google\Service\Directory\ChromeOsDevice $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Directory\ChromeOsDevice');
  }
  /**
   * Update Chrome OS Device (chromeosdevices.update)
   *
   * @param string $customerId
   * Immutable id of the Google Apps account
   * @param string $deviceId
   * Immutable id of Chrome OS Device
   * @param Google_ChromeOsDevice $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string projection
   * Restrict information returned to a set of selected fields.
   * @return \Google\Service\Directory\ChromeOsDevice
   */
  public function update($customerId, $deviceId, \Google\Service\Directory\ChromeOsDevice $postBody, $optParams = array())
  {
    $params = array('customerId' => $customerId, 'deviceId' => $deviceId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Directory\ChromeOsDevice');
  }
}
