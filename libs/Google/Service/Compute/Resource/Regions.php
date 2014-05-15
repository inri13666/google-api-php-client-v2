<?php 
namespace Google\Service\Compute\Resource;
class Regions extends \Google\Resource\Service
{

  /**
   * Returns the specified region resource. (regions.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Region
   */
  public function get($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Region');
  }
  /**
   * Retrieves the list of region resources available to the specified project.
   * (regions.listRegions)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 500.
   * @return \Google\Service\Compute\RegionList
   */
  public function listRegions($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\RegionList');
  }
}
