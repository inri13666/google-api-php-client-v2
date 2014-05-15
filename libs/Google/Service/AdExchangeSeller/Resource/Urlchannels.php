<?php 
namespace Google\Service\AdExchangeSeller\Resource;
class Urlchannels extends \Google\Resource\Service
{

  /**
   * List all URL channels in the specified ad client for this Ad Exchange
   * account. (urlchannels.listUrlchannels)
   *
   * @param string $adClientId
   * Ad client for which to list URL channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through URL channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of URL channels to include in the response, used for paging.
   * @return \Google\Service\AdExchangeSeller\UrlChannels
   */
  public function listUrlchannels($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdExchangeSeller\UrlChannels');
  }
}
