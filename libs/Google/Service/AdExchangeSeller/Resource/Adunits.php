<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class Adunits extends \Google\Resource\Service
{

  /**
   * Gets the specified ad unit in the specified ad client. (adunits.get)
   *
   * @param string $adClientId
   * Ad client for which to get the ad unit.
   * @param string $adUnitId
   * Ad unit to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdExchangeSeller\AdUnit
   */
  public function get($adClientId, $adUnitId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdExchangeSeller\AdUnit');
  }
  /**
   * List all ad units in the specified ad client for this Ad Exchange account.
   * (adunits.listAdunits)
   *
   * @param string $adClientId
   * Ad client for which to list ad units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeInactive
   * Whether to include inactive ad units. Default: true.
   * @opt_param string pageToken
   * A continuation token, used to page through ad units. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of ad units to include in the response, used for paging.
   * @return \Google\Service\AdExchangeSeller\AdUnits
   */
  public function listAdunits($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\AdUnits');
  }
}
