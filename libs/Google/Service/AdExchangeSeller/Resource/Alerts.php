<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class Alerts extends \Google\Resource\Service
{

  /**
   * List the alerts for this Ad Exchange account. (alerts.listAlerts)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string locale
   * The locale to use for translating alert messages. The account locale will be used if this is not
    * supplied. The AdSense default (English) will be used if the supplied locale is invalid or
    * unsupported.
   * @return \Google\Service\AdExchangeSeller\Alerts
   */
  public function listAlerts($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\Alerts');
  }
}
