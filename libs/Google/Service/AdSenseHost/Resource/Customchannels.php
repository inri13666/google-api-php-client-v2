<?php 
namespace Google\Service\AdSenseHost\Resource;
class Customchannels extends \Google\Resource\Service
{

  /**
   * Delete a specific custom channel from the host AdSense account.
   * (customchannels.delete)
   *
   * @param string $adClientId
   * Ad client from which to delete the custom channel.
   * @param string $customChannelId
   * Custom channel to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\CustomChannel
   */
  public function delete($adClientId, $customChannelId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\AdSenseHost\CustomChannel');
  }
  /**
   * Get a specific custom channel from the host AdSense account.
   * (customchannels.get)
   *
   * @param string $adClientId
   * Ad client from which to get the custom channel.
   * @param string $customChannelId
   * Custom channel to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\CustomChannel
   */
  public function get($adClientId, $customChannelId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSenseHost\CustomChannel');
  }
  /**
   * Add a new custom channel to the host AdSense account. (customchannels.insert)
   *
   * @param string $adClientId
   * Ad client to which the new custom channel will be added.
   * @param Google_CustomChannel $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\CustomChannel
   */
  public function insert($adClientId, \Google\Service\AdSenseHost\CustomChannel $postBody, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\AdSenseHost\CustomChannel');
  }
  /**
   * List all host custom channels in this AdSense account.
   * (customchannels.listCustomchannels)
   *
   * @param string $adClientId
   * Ad client for which to list custom channels.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through custom channels. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of custom channels to include in the response, used for paging.
   * @return \Google\Service\AdSenseHost\CustomChannels
   */
  public function listCustomchannels($adClientId, $optParams = array())
  {
    $params = array('adClientId' => $adClientId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSenseHost\CustomChannels');
  }
  /**
   * Update a custom channel in the host AdSense account. This method supports
   * patch semantics. (customchannels.patch)
   *
   * @param string $adClientId
   * Ad client in which the custom channel will be updated.
   * @param string $customChannelId
   * Custom channel to get.
   * @param Google_CustomChannel $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\CustomChannel
   */
  public function patch($adClientId, $customChannelId, \Google\Service\AdSenseHost\CustomChannel $postBody, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'customChannelId' => $customChannelId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\AdSenseHost\CustomChannel');
  }
  /**
   * Update a custom channel in the host AdSense account. (customchannels.update)
   *
   * @param string $adClientId
   * Ad client in which the custom channel will be updated.
   * @param Google_CustomChannel $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSenseHost\CustomChannel
   */
  public function update($adClientId, \Google\Service\AdSenseHost\CustomChannel $postBody, $optParams = array())
  {
    $params = array('adClientId' => $adClientId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\AdSenseHost\CustomChannel');
  }
}
