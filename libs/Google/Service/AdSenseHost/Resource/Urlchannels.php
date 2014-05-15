<?php 
namespace Google\Service\AdSenseHost\Resource;
class Urlchannels extends \Google\Resource\Service
{

  /**
   * Delete a URL channel from the host AdSense account. (urlchannels.delete)
   *
   * @param string $adClientId
   * Ad client from which to delete the URL channel.
   * @param string $urlChannelId
   * URL channel to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\UrlChannel
   */
  public function delete($adClientId, $urlChannelId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'urlChannelId' => $urlChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\AdSenseHost\UrlChannel');
  }
  /**
   * Add a new URL channel to the host AdSense account. (urlchannels.insert)
   *
   * @param string $adClientId
   * Ad client to which the new URL channel will be added.
   * @param Google_UrlChannel $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\UrlChannel
   */
  public function insert($adClientId, \Google\Service\AdSenseHost\UrlChannel $postBody, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\AdSenseHost\UrlChannel');
  }
  /**
   * List all host URL channels in the host AdSense account.
   * (urlchannels.listUrlchannels)
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
   * @return \Google\Service\AdSenseHost\UrlChannels
   */
  public function listUrlchannels($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSenseHost\UrlChannels');
  }
}
