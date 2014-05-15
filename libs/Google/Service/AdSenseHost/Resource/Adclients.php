<?php 
namespace Google\Service\AdSenseHost\Resource;
class Adclients extends \Google\Resource\Service
{

  /**
   * Get information about one of the ad clients in the Host AdSense account.
   * (adclients.get)
   *
   * @param string $adClientId
   * Ad client to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\AdClient
   */
  public function get($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSenseHost\AdClient');
  }
  /**
   * List all host ad clients in this AdSense account. (adclients.listAdclients)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through ad clients. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of ad clients to include in the response, used for paging.
   * @return \Google\Service\AdSenseHost\AdClients
   */
  public function listAdclients($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSenseHost\AdClients');
  }
}
