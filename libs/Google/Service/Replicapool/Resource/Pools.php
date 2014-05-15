<?php 
namespace Google\Service\Replicapool\Resource;
class Pools extends \Google\Resource\Service
{

  /**
   * Deletes a replica pool. (pools.delete)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param string $poolName
   * The name of the replica pool to delete.
   * @param Google_PoolsDeleteRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function delete($projectName, $zone, $poolName, \Google\Service\Replicapool\PoolsDeleteRequest $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets information about a single replica pool. (pools.get)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param string $poolName
   * The name of the replica pool for which you want to get more information.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Replicapool\Pool
   */
  public function get($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Replicapool\Pool');
  }
  /**
   * Inserts a new replica pool. (pools.insert)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param Google_Pool $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Replicapool\Pool
   */
  public function insert($projectName, $zone, \Google\Service\Replicapool\Pool $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Replicapool\Pool');
  }
  /**
   * List all replica pools. (pools.listPools)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Specifies a nextPageToken returned by a previous list request. This token can be used to request
    * the next page of results from a previous list request.
   * @opt_param int maxResults
   * Maximum count of results to be returned. Acceptable values are 0 to 100, inclusive. (Default:
    * 50)
   * @return \Google\Service\Replicapool\PoolsListResponse
   */
  public function listPools($projectName, $zone, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Replicapool\PoolsListResponse');
  }
  /**
   * Resize a pool. (pools.resize)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param string $poolName
   * The name of the replica pool to resize.
   * @param array $optParams Optional parameters.
   *
   * @opt_param int numReplicas
   * The desired number of replicas to resize to. If this number is larger than the existing number
    * of replicas, new replicas will be added. If the number is smaller, then existing replicas will
    * be deleted.
  This is an asynchronous operation, and multiple overlapping resize requests can be
    * made. Replica Pools will use the information from the last resize request.
   * @return \Google\Service\Replicapool\Pool
   */
  public function resize($projectName, $zone, $poolName, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName);
    $params = array_merge($params, $optParams);
    return $this->call('resize', array($params), 'Google\Service\Replicapool\Pool');
  }
  /**
   * Update the template used by the pool. (pools.updatetemplate)
   *
   * @param string $projectName
   * The project ID for this replica pool.
   * @param string $zone
   * The zone for this replica pool.
   * @param string $poolName
   * The name of the replica pool to update.
   * @param Google_Template $postBody
   * @param array $optParams Optional parameters.
   */
  public function updatetemplate($projectName, $zone, $poolName, \Google\Service\Replicapool\Template $postBody, $optParams = array())
  {
    $params = array('projectName' => $projectName, 'zone' => $zone, 'poolName' => $poolName, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('updatetemplate', array($params));
  }
}
