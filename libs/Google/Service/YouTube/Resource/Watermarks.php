<?php 
namespace Google\Service\YouTube\Resource;
class Watermarks extends \Google\Resource\Service
{

  /**
   * Uploads a watermark image to YouTube and sets it for a channel.
   * (watermarks.set)
   *
   * @param string $channelId
   * The channelId parameter specifies a YouTube channel ID for which the watermark is being
    * provided.
   * @param Google_InvideoBranding $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf
    * of the content owner specified in the parameter value. This parameter is intended for YouTube
    * content partners that own and manage many different YouTube channels. It allows content owners
    * to authenticate once and get access to all their video and channel data, without having to
    * provide authentication credentials for each individual channel. The actual CMS account that the
    * user authenticates with needs to be linked to the specified YouTube content owner.
   */
  public function set($channelId, \Google\Service\YouTube\InvideoBranding $postBody, $optParams = array())
  {
    $params = array('channelId' => $channelId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('set', array($params));
  }
  /**
   * Deletes a watermark. (watermarks.unsetWatermarks)
   *
   * @param string $channelId
   * The channelId parameter specifies a YouTube channel ID for which the watermark is being unset.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf
    * of the content owner specified in the parameter value. This parameter is intended for YouTube
    * content partners that own and manage many different YouTube channels. It allows content owners
    * to authenticate once and get access to all their video and channel data, without having to
    * provide authentication credentials for each individual channel. The actual CMS account that the
    * user authenticates with needs to be linked to the specified YouTube content owner.
   */
  public function unsetWatermarks($channelId, $optParams = array())
  {
    $params = array('channelId' => $channelId);
    $params = array_merge($params, $optParams);
    return $this->call('unset', array($params));
  }
}
