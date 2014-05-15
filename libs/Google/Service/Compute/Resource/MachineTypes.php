<?php 
namespace Google\Service\Compute\Resource;
class MachineTypes extends \Google\Resource\Service
{

  /**
   * Retrieves the list of machine type resources grouped by scope.
   * (machineTypes.aggregatedList)
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
   * @return \Google\Service\Compute\MachineTypeAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\MachineTypeAggregatedList');
  }
  /**
   * Returns the specified machine type resource. (machineTypes.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $machineType
   * Name of the machine type resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\MachineType
   */
  public function get($project, $zone, $machineType, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'machineType' => $machineType);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\MachineType');
  }
  /**
   * Retrieves the list of machine type resources available to the specified
   * project. (machineTypes.listMachineTypes)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
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
   * @return \Google\Service\Compute\MachineTypeList
   */
  public function listMachineTypes($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\MachineTypeList');
  }
}
