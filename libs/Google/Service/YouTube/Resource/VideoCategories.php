<?php 
namespace Google\Service\YouTube\Resource;
class VideoCategories extends \Google\Resource\Service
{

  /**
   * Returns a list of categories that can be associated with YouTube videos.
   * (videoCategories.listVideoCategories)
   *
   * @param string $part
   * The part parameter specifies the videoCategory resource parts that the API response will
    * include. Supported values are id and snippet.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string regionCode
   * The regionCode parameter instructs the API to return the list of video categories available in
    * the specified country. The parameter value is an ISO 3166-1 alpha-2 country code.
   * @opt_param string id
   * The id parameter specifies a comma-separated list of video category IDs for the resources that
    * you are retrieving.
   * @opt_param string hl
   * The hl parameter specifies the language that should be used for text values in the API response.
   * @return \Google\Service\YouTube\VideoCategoryListResponse
   */
  public function listVideoCategories($part, $optParams = array())
  {
    $params = array('part' => $part);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\YouTube\VideoCategoryListResponse');
  }
}
