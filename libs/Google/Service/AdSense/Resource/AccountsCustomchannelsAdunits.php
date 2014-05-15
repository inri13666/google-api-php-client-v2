<?php 
namespace Google\Service\AdSense\Resource;
class AccountsCustomchannelsAdunits extends \Google\Resource\Service
{

  /**
   * List all ad units in the specified custom channel.
   * (adunits.listAccountsCustomchannelsAdunits)
   *
   * @param string $accountId
   * Account to which the ad client belongs.
   * @param string $adClientId
   * Ad client which contains the custom channel.
   * @param string $customChannelId
   * Custom channel for which to list ad units.
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool includeInactive
   * Whether to include inactive ad units. Default: true.
   * @opt_param int maxResults
   * The maximum number of ad units to include in the response, used for paging.
   * @opt_param string pageToken
   * A continuation token, used to page through ad units. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @return \Google\Service\AdSense\AdUnits
   */
  public function listAccountsCustomchannelsAdunits($accountId, $adClientId, $customChannelId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\AdUnits');
  }
}
