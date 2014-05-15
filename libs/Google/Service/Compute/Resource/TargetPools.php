<?php 
namespace Google\Service\Compute\Resource;
class TargetPools extends \Google\Resource\Service
{

  /**
   * Adds health check URL to targetPool. (targetPools.addHealthCheck)
   *
   * @param string $project
   *
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to which health_check_url is to be added.
   * @param Google_TargetPoolsAddHealthCheckRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function addHealthCheck($project, $region, $targetPool, \Google\Service\Compute\TargetPoolsAddHealthCheckRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addHealthCheck', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Adds instance url to targetPool. (targetPools.addInstance)
   *
   * @param string $project
   *
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to which instance_url is to be added.
   * @param Google_TargetPoolsAddInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function addInstance($project, $region, $targetPool, \Google\Service\Compute\TargetPoolsAddInstanceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('addInstance', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of target pools grouped by scope.
   * (targetPools.aggregatedList)
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
   * @return \Google\Service\Compute\TargetPoolAggregatedList
   */
  public function aggregatedList($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('aggregatedList', array($params), 'Google\Service\Compute\TargetPoolAggregatedList');
  }
  /**
   * Deletes the specified TargetPool resource. (targetPools.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $region, $targetPool, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified TargetPool resource. (targetPools.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\TargetPool
   */
  public function get($project, $region, $targetPool, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\TargetPool');
  }
  /**
   * Gets the most recent health check results for each IP for the given instance
   * that is referenced by given TargetPool. (targetPools.getHealth)
   *
   * @param string $project
   *
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to which the queried instance belongs.
   * @param Google_InstanceReference $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\TargetPoolInstanceHealth
   */
  public function getHealth($project, $region, $targetPool, \Google\Service\Compute\InstanceReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('getHealth', array($params), 'Google\Service\Compute\TargetPoolInstanceHealth');
  }
  /**
   * Creates a TargetPool resource in the specified project and region using the
   * data included in the request. (targetPools.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param Google_TargetPool $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, $region, \Google\Service\Compute\TargetPool $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of TargetPool resources available to the specified project
   * and region. (targetPools.listTargetPools)
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
   * @return \Google\Service\Compute\TargetPoolList
   */
  public function listTargetPools($project, $region, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\TargetPoolList');
  }
  /**
   * Removes health check URL from targetPool. (targetPools.removeHealthCheck)
   *
   * @param string $project
   *
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to which health_check_url is to be removed.
   * @param Google_TargetPoolsRemoveHealthCheckRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function removeHealthCheck($project, $region, $targetPool, \Google\Service\Compute\TargetPoolsRemoveHealthCheckRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeHealthCheck', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Removes instance URL from targetPool. (targetPools.removeInstance)
   *
   * @param string $project
   *
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource to which instance_url is to be removed.
   * @param Google_TargetPoolsRemoveInstanceRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function removeInstance($project, $region, $targetPool, \Google\Service\Compute\TargetPoolsRemoveInstanceRequest $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('removeInstance', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Changes backup pool configurations. (targetPools.setBackup)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $region
   * Name of the region scoping this request.
   * @param string $targetPool
   * Name of the TargetPool resource for which the backup is to be set.
   * @param Google_TargetReference $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param float failoverRatio
   * New failoverRatio value for the containing target pool.
   * @return \Google\Service\Compute\Operation
   */
  public function setBackup($project, $region, $targetPool, \Google\Service\Compute\TargetReference $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'region' => $region, 'targetPool' => $targetPool, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setBackup', array($params), 'Google\Service\Compute\Operation');
  }
}
