<?php 
namespace Google\Service\AdSense\Resource;
class AccountsAdunits extends \Google\Resource\Service
{

  /**
   * Gets the specified ad unit in the specified ad client for the specified
   * account. (adunits.get)
   *
   * @param string $accountId
   * Account to which the ad client belongs.
   * @param string $adClientId
   * Ad client for which to get the ad unit.
   * @param string $adUnitId
   * Ad unit to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\AdUnit
   */
  public function get($accountId, $adClientId, $adUnitId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSense\AdUnit');
  }
  /**
   * Get ad code for the specified ad unit. (adunits.getAdCode)
   *
   * @param string $accountId
   * Account which contains the ad client.
   * @param string $adClientId
   * Ad client with contains the ad unit.
   * @param string $adUnitId
   * Ad unit to get the code for.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\AdCode
   */
  public function getAdCode($accountId, $adClientId, $adUnitId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('getAdCode', array($params), 'Google\Service\AdSense\AdCode');
  }
  /**
   * List all ad units in the specified ad client for the specified account.
   * (adunits.listAccountsAdunits)
   *
   * @param string $accountId
   * Account to which the ad client belongs.
   * @param string $adClientId
   * Ad client for which to list ad units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeInactive
   * Whether to include inactive ad units. Default: true.
   * @opt_param string pageToken
   * A continuation token, used to page through ad units. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of ad units to include in the response, used for paging.
   * @return \Google\Service\AdSense\AdUnits
   */
  public function listAccountsAdunits($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\AdUnits');
  }
}
