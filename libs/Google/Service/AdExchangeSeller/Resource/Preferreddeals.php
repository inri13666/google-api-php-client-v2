<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class Preferreddeals extends \Google\Resource\Service
{

  /**
   * Get information about the selected Ad Exchange Preferred Deal.
   * (preferreddeals.get)
   *
   * @param string $dealId
   * Preferred deal to get information about.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\PreferredDeal
   */
  public function get($dealId, $optParams = array())
  {
    $params = array('dealId' => $dealId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeSeller\PreferredDeal');
  }
  /**
   * List the preferred deals for this Ad Exchange account.
   * (preferreddeals.listPreferreddeals)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\PreferredDeals
   */
  public function listPreferreddeals($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\PreferredDeals');
  }
}
