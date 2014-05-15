<?php 
namespace Google\Service\AdSense\Resource;
class AccountsUrlchannels extends \Google\Resource\Service
{

  /**
   * List all URL channels in the specified ad client for the specified account.
   * (urlchannels.listAccountsUrlchannels)
   *
   * @param string $accountId
   * Account to which the ad client belongs.
   * @param string $adClientId
   * Ad client for which to list URL channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through URL channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of URL channels to include in the response, used for paging.
   * @return \Google\Service\AdSense\UrlChannels
   */
  public function listAccountsUrlchannels($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\UrlChannels');
  }
}
