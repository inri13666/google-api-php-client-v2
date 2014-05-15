<?php 
namespace Google\Service\AdExchangeBuyer\Resource;
class DirectDeals extends \Google\Resource\Service
{

  /**
   * Gets one direct deal by ID. (directDeals.get)
   *
   * @param string $id
   * The direct deal id
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\DirectDeal
   */
  public function get($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeBuyer\DirectDeal');
  }
  /**
   * Retrieves the authenticated user's list of direct deals.
   * (directDeals.listDirectDeals)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeBuyer\DirectDealsList
   */
  public function listDirectDeals($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeBuyer\DirectDealsList');
  }
}
