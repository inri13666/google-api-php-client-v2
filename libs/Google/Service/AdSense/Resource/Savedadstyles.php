<?php 
namespace Google\Service\AdSense\Resource;
class Savedadstyles extends \Google\Resource\Service
{

  /**
   * Get a specific saved ad style from the user's account. (savedadstyles.get)
   *
   * @param string $savedAdStyleId
   * Saved ad style to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\AdSense\SavedAdStyle
   */
  public function get($savedAdStyleId, $optParams = array())
  {
    $params = array('savedAdStyleId' => $savedAdStyleId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\AdSense\SavedAdStyle');
  }
  /**
   * List all saved ad styles in the user's account.
   * (savedadstyles.listSavedadstyles)
   *
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * A continuation token, used to page through saved ad styles. To retrieve the next page, set this
    * parameter to the value of "nextPageToken" from the previous response.
   * @opt_param int maxResults
   * The maximum number of saved ad styles to include in the response, used for paging.
   * @return \Google\Service\AdSense\SavedAdStyles
   */
  public function listSavedadstyles($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\AdSense\SavedAdStyles');
  }
}
