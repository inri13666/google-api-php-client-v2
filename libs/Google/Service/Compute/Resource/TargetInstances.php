<?php 
namespace Google\Service\Compute\Resource;
class TargetInstances extends \Google\Resource\Service
{

  /**
   * Retrieves the list of target instances grouped by scope.
   * (targetInstances.aggregatedList)
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
   * @return \Google\Service\Compute\TargetInstanceAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\TargetInstanceAggregatedList');
  }
  /**
   * Deletes the specified TargetInstance resource. (targetInstances.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $targetInstance
   * Name of the TargetInstance resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $zone, $targetInstance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified TargetInstance resource. (targetInstances.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param string $targetInstance
   * Name of the TargetInstance resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\TargetInstance
   */
  public function get($project, $zone, $targetInstance, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'targetInstance' => $targetInstance);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\TargetInstance');
  }
  /**
   * Creates a TargetInstance resource in the specified project and zone using the
   * data included in the request. (targetInstances.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $zone
   * Name of the zone scoping this request.
   * @param Google_TargetInstance $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $zone, \Google\Service\Compute\TargetInstance $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of TargetInstance resources available to the specified
   * project and zone. (targetInstances.listTargetInstances)
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
   * @return \Google\Service\Compute\TargetInstanceList
   */
  public function listTargetInstances($project, $zone, $optParams = array())
  {
    $params = array('project' => $project, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\TargetInstanceList');
  }
}
