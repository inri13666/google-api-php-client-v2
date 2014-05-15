<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class AdunitsCustomchannels extends \Google\Resource\Service
{

  /**
   * List all custom channels which the specified ad unit belongs to.
   * (customchannels.listAdunitsCustomchannels)
   *
   * @param string $adClientId
   * Ad client which contains the ad unit.
   * @param string $adUnitId
   * Ad unit for which to list custom channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through custom channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of custom channels to include in the response, used for paging.
   * @return \Google\Service\AdExchangeSeller\CustomChannels
   */
  public function listAdunitsCustomchannels($adClientId, $adUnitId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'adUnitId' => $adUnitId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\CustomChannels');
  }
}
