<?php 
namespace Google\Service\Compute\Resource;
class Snapshots extends \Google\Resource\Service
{

  /**
   * Deletes the specified persistent disk snapshot resource. (snapshots.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $snapshot
   * Name of the persistent disk snapshot resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $snapshot, $optParams = array())
  {
    $params = array('project' => $project, 'snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified persistent disk snapshot resource. (snapshots.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $snapshot
   * Name of the persistent disk snapshot resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Snapshot
   */
  public function get($project, $snapshot, $optParams = array())
  {
    $params = array('project' => $project, 'snapshot' => $snapshot);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Snapshot');
  }
  /**
   * Retrieves the list of persistent disk snapshot resources contained within the
   * specified project. (snapshots.listSnapshots)
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
   * @return \Google\Service\Compute\SnapshotList
   */
  public function listSnapshots($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\SnapshotList');
  }
}
