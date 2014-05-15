<?php 
namespace Google\Service\Resourceviews\Resource;
class ZoneViews extends \Google\Resource\Service
{

  /**
   * Add resources to the view. (zoneViews.addresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param Google_ZoneViewsAddResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function addresources($projectName, $zone, $resourceViewName, \Google\Service\Resourceviews\ZoneViewsAddResourcesRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'resourceViewName' => $resourceViewName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addresources', array($params));
  }
  /**
   * Delete a resource view. (zoneViews.delete)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param array $optParams Optional parameters.
   */
  public function delete($projectName, $zone, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Get the information of a zonal resource view. (zoneViews.get)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Resourceviews\ResourceView
   */
  public function get($projectName, $zone, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Resourceviews\ResourceView');
  }
  /**
   * Create a resource view. (zoneViews.insert)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param Google_ResourceView $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Resourceviews\ZoneViewsInsertResponse
   */
  public function insert($projectName, $zone, \Google\Service\Resourceviews\ResourceView $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Resourceviews\ZoneViewsInsertResponse');
  }
  /**
   * List resource views. (zoneViews.listZoneViews)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 500, inclusive. (Default:
    * 50)
   * @return \Google\Service\Resourceviews\ZoneViewsListResponse
   */
  public function listZoneViews($projectName, $zone, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Resourceviews\ZoneViewsListResponse');
  }
  /**
   * List the resources of the resource view. (zoneViews.listresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
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
   * @return \Google\Service\Resourceviews\ZoneViewsListResourcesResponse
   */
  public function listresources($projectName, $zone, $resourceViewName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'resourceViewName' => $resourceViewName);
    $params = array_merge($params, $optParams);
    return $this->call('listresources', array($params), 'Google\Service\Resourceviews\ZoneViewsListResourcesResponse');
  }
  /**
   * Remove resources from the view. (zoneViews.removeresources)
   *
   * @param string $projectName
   * The project name of the resource view.
   * @param string $zone
   * The zone name of the resource view.
   * @param string $resourceViewName
   * The name of the resource view.
   * @param Google_ZoneViewsRemoveResourcesRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function removeresources($projectName, $zone, $resourceViewName, \Google\Service\Resourceviews\ZoneViewsRemoveResourcesRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'resourceViewName' => $resourceViewName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeresources', array($params));
  }
}
