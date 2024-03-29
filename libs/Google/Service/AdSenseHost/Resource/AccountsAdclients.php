<?php 
namespace Google\Service\AdSenseHost\Resource;
class AccountsAdclients extends \Google\Resource\Service
{

  /**
   * Get information about one of the ad clients in the specified publisher's
   * AdSense account. (adclients.get)
   *
   * @param string $accountId
   * Account which contains the ad client.
   * @param string $adClientId
   * Ad client to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\AdClient
   */
  public function get($accountId, $adClientId, $optParams = array())
  {
    $params = array('accountId' => $accountId, 'adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSenseHost\AdClient');
  }
  /**
   * List all hosted ad clients in the specified hosted account.
   * (adclients.listAccountsAdclients)
   *
   * @param string $accountId
   * Account for which to list ad clients.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through ad clients. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of ad clients to include in the response, used for paging.
   * @return \Google\Service\AdSenseHost\AdClients
   */
  public function listAccountsAdclients($accountId, $optParams = array())
  {
    $params = array('accountId' => $accountId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSenseHost\AdClients');
  }
}
