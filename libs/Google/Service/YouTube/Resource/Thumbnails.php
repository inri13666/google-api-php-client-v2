<?php 
namespace Google\Service\YouTube\Resource;
class Thumbnails extends \Google\Resource\Service
{

  /**
   * Uploads a custom video thumbnail to YouTube and sets it for a video.
   * (thumbnails.set)
   *
   * @param string $videoId
   * The videoId parameter specifies a YouTube video ID for which the custom video thumbnail is being
    * provided.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * The onBehalfOfContentOwner parameter indicates that the authenticated user is acting on behalf
    * of the content owner specified in the parameter value. This parameter is intended for YouTube
    * content partners that own and manage many different YouTube channels. It allows content owners
    * to authenticate once and get access to all their video and channel data, without having to
    * provide authentication credentials for each individual channel. The actual CMS account that the
    * user authenticates with needs to be linked to the specified YouTube content owner.
   * @return \Google\Service\YouTube\ThumbnailSetResponse
   */
  public function set($videoId, $optParams = array())
  {
    $params = array('videoId' => $videoId);
    $params = array_merge($params, $optParams);
    return $this->call('set', array($params), 'Google\Service\YouTube\ThumbnailSetResponse');
  }
}
