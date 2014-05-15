<?php 
namespace Google\Service\Resourceviews\Resource;
class RegionViews extends \Google\Resource\Service
{

  /**
   * Add resources to the view. (regionViews.addresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param Google_RegionViewsAddResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function addresources($projectName, $region, $resourceViewName, \Google\Service\Resourceviews\RegionViewsAddResourcesRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'resourceViewName' => $resourceViewName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addresources', array($params));
  }
  /**
   * Delete a resource view. (regionViews.delete)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param array $optParams Optional parameters.
   */
  public function delete($projectName, $region, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get the information of a resource view. (regionViews.get)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Resourceviews\ResourceView
   */
  public function get($projectName, $region, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Resourceviews\ResourceView');
  }
  /**
   * Create a resource view. (regionViews.insert)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param Google_ResourceView $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Resourceviews\RegionViewsInsertResponse
   */
  public function insert($projectName, $region, \Google\Service\Resourceviews\ResourceView $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Resourceviews\RegionViewsInsertResponse');
  }
  /**
   * List resource views. (regionViews.listRegionViews)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 500, inclusive. (Default:
    * 50)
   * @return \Google\Service\Resourceviews\RegionViewsListResponse
   */
  public function listRegionViews($projectName, $region, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Resourceviews\RegionViewsListResponse');
  }
  /**
   * List the resources in the view. (regionViews.listresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 500, inclusive. (Default:
    * 50)
   * @return \Google\Service\Resourceviews\RegionViewsListResourcesResponse
   */
  public function listresources($projectName, $region, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('listresources', array($params), 'Google\Service\Resourceviews\RegionViewsListResourcesResponse');
  }
  /**
   * Remove resources from the view. (regionViews.removeresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $region
   * The region name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param Google_RegionViewsRemoveResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function removeresources($projectName, $region, $resourceViewName, \Google\Service\Resourceviews\RegionViewsRemoveResourcesRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'region' => $region, 'resourceViewName' => $resourceViewName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeresources', array($params));
  }
}
