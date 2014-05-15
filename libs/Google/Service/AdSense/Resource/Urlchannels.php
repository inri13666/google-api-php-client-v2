<?php 
namespace Google\Service\AdSense\Resource;
class Urlchannels extends \Google\Resource\Service
{

  /**
   * List all URL channels in the specified ad client for this AdSense account.
   * (urlchannels.listUrlchannels)
   *
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
  public function listUrlchannels($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\UrlChannels');
  }
}
