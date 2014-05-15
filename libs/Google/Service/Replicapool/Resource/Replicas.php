<?php 
namespace Google\Service\Replicapool\Resource;
class Replicas extends \Google\Resource\Service
{

  /**
   * Gets information about a specific replica. (replicas.get)
   *
   * @param string $projectName
   * The name of project ID for this request.
   * @param string $zone
   * The zone where the replica lives.
   * @param string $poolName
   * The replica pool name for this request.
   * @param string $replicaName
   * The name of the replica for which you want to get more information.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Replicapool\Replica
   */
  public function get($projectName, $zone, $poolName, $replicaName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'replicaName' => $replicaName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Replicapool\Replica');
  }
  /**
   * Lists all replicas in a pool. (replicas.listReplicas)
   *
   * @param string $projectName
   * The name of project ID for this request.
   * @param string $zone
   * The zone where the replica lives.
   * @param string $poolName
   * The replica pool name for this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 100, inclusive. (Default:
    * 50)
   * @return \Google\Service\Replicapool\ReplicasListResponse
   */
  public function listReplicas($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Replicapool\ReplicasListResponse');
  }
  /**
   * Restarts a replica in a pool. (replicas.restart)
   *
   * @param string $projectName
   * The name of project ID for this request.
   * @param string $zone
   * The zone where the replica lives.
   * @param string $poolName
   * The replica pool name for this request.
   * @param string $replicaName
   * The name of the replica to restart in the pool.
   * @param array $optParams Optional parameters.
   */
  public function restart($projectName, $zone, $poolName, $replicaName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'replicaName' => $replicaName);
    $params = array_merge($params, $optParams);
    return $this->call('restart', array($params));
  }
}
