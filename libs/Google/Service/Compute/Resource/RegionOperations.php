<?php 
namespace Google\Service\Compute\Resource;
class RegionOperations extends \Google\Resource\Service
{

  /**
   * Deletes the specified region-specific operation resource.
   * (regionOperations.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $operation
   * Name of the operation resource to delete.
   * @param array $optParams Optional parameters.
   */
  public function delete($project, $region, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves the specified region-specific operation resource.
   * (regionOperations.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the zone scoping this request.
   * @param string $operation
   * Name of the operation resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function get($project, $region, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of operation resources contained within the specified
   * region. (regionOperations.listRegionOperations)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
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
   * @return \Google\Service\Compute\OperationList
   */
  public function listRegionOperations($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\OperationList');
  }
}
