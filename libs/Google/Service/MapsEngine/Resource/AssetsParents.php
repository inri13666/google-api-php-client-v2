<?php 
namespace Google\Service\MapsEngine\Resource;
class AssetsParents extends \Google\Resource\Service
{

  /**
   * Return all parent ids of the specified asset. (parents.listAssetsParents)
   *
   * @param string $id
   * The ID of the asset whose parents will be listed.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, used to page through large result sets. To get the next page of results,
    * set this parameter to the value of nextPageToken from the previous response.
   * @opt_param string maxResults
   * The maximum number of items to include in a single response page. The maximum supported value is
    * 50.
   * @return \Google\Service\MapsEngine\ParentsListResponse
   */
  public function listAssetsParents($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\MapsEngine\ParentsListResponse');
  }
}
