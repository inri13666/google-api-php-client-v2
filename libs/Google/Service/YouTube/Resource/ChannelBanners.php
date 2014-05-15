<?php 
namespace Google\Service\YouTube\Resource;
class ChannelBanners extends \Google\Resource\Service
{

  /**
   * Uploads a channel banner image to YouTube. This method represents the first
   * two steps in a three-step process to update the banner image for a channel:
   *
   * - Call the channelBanners.insert method to upload the binary image data to
   * YouTube. The image must have a 16:9 aspect ratio and be at least 2120x1192
   * pixels. - Extract the url property's value from the response that the API
   * returns for step 1. - Call the channels.update method to update the channel's
   * branding settings. Set the brandingSettings.image.bannerExternalUrl
   * property's value to the URL obtained in step 2. (channelBanners.insert)
   *
   * @param Google_ChannelBannerResource $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param string onBehalfOfContentOwner
   * Note: This parameter is intended exclusively for YouTube content partners.
  The
    * onBehalfOfContentOwner parameter indicates that the request's authorization credentials identify
    * a YouTube CMS user who is acting on behalf of the content owner specified in the parameter
    * value. This parameter is intended for YouTube content partners that own and manage many
    * different YouTube channels. It allows content owners to authenticate once and get access to all
    * their video and channel data, without having to provide authentication credentials for each
    * individual channel. The CMS account that the user authenticates with must be linked to the
    * specified YouTube content owner.
   * @return \Google\Service\YouTube\ChannelBannerResource
   */
  public function insert(\Google\Service\YouTube\ChannelBannerResource $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\YouTube\ChannelBannerResource');
  }
}
