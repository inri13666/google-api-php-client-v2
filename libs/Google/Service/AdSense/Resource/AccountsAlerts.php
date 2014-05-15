<?php 
namespace Google\Service\AdSense\Resource;
class AccountsAlerts extends \Google\Resource\Service
{

  /**
   * Dismiss (delete) the specified alert from the specified publisher AdSense
   * account. (alerts.delete)
   *
   * @param string $accountId
   * Account which contains the ad unit.
   * @param string $alertId
   * Alert to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($accountId, $alertId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'alertId' => $alertId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * List the alerts for the specified AdSense account.
   * (alerts.listAccountsAlerts)
   *
   * @param string $accountId
   * Account for which to retrieve the alerts.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * The locale to use for translating alert messages. The account locale will be used if this is not
    * supplied. The AdSense default (English) will be used if the supplied locale is invalid or
    * unsupported.
   * @return \Google\Service\AdSense\Alerts
   */
  public function listAccountsAlerts($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\Alerts');
  }
}
