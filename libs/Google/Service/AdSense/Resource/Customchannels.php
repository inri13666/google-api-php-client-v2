<?php 
namespace Google\Service\AdSense\Resource;
class Customchannels extends \Google\Resource\Service
{

  /**
   * Get the specified custom channel from the specified ad client.
   * (customchannels.get)
   *
   * @param string $adClientId
   * Ad client which contains the custom channel.
   * @param string $customChannelId
   * Custom channel to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\CustomChannel
   */
  public function get($adClientId, $customChannelId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSense\CustomChannel');
  }
  /**
   * List all custom channels in the specified ad client for this AdSense account.
   * (customchannels.listCustomchannels)
   *
   * @param string $adClientId
   * Ad client for which to list custom channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through custom channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of custom channels to include in the response, used for paging.
   * @return \Google\Service\AdSense\CustomChannels
   */
  public function listCustomchannels($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\CustomChannels');
  }
}
