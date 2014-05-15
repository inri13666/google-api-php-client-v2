<?php 
namespace Google\Service\AdSense\Resource;
class Alerts extends \Google\Resource\Service
{

  /**
   * Dismiss (delete) the specified alert from the publisher's AdSense account.
   * (alerts.delete)
   *
   * @param string $alertId
   * Alert to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($alertId, $optParams = array())
  {
    $params = array('alertId' => $alertId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * List the alerts for this AdSense account. (alerts.listAlerts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * The locale to use for translating alert messages. The account locale will be used if this is not
    * supplied. The AdSense default (English) will be used if the supplied locale is invalid or
    * unsupported.
   * @return \Google\Service\AdSense\Alerts
   */
  public function listAlerts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Alerts');
  }
}
