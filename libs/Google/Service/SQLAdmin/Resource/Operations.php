<?php 
namespace Google\Service\SQLAdmin\Resource;
class Operations extends \Google\Resource\Service
{

  /**
   * Retrieves an instance operation that has been performed on an instance.
   * (operations.get)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param string $operation
   * Instance operation ID.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\SQLAdmin\InstanceOperation
   */
  public function get($project, $instance, $operation, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance, 'operation' => $operation);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\SQLAdmin\InstanceOperation');
  }
  /**
   * Lists all instance operations that have been performed on the given Cloud SQL
   * instance in the reverse chronological order of the start time.
   * (operations.listOperations)
   *
   * @param string $project
   * Project ID of the project that contains the instance.
   * @param string $instance
   * Cloud SQL instance ID. This does not include the project ID.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults
   * Maximum number of operations per response.
   * @opt_param string pageToken
   * A previously-returned page token representing part of the larger set of results to view.
   * @return \Google\Service\SQLAdmin\OperationsListResponse
   */
  public function listOperations($project, $instance, $optParams = array())
  {
    $params = array('project' => $project, 'instance' => $instance);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\SQLAdmin\OperationsListResponse');
  }
}
