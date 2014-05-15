<?php 
namespace Google\Service\Datastore\Resource;
class Datasets extends \Google\Resource\Service
{

  /**
   * Allocate IDs for incomplete keys (useful for referencing an entity before it
   * is inserted). (datasets.allocateIds)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_AllocateIdsRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\AllocateIdsResponse
   */
  public function allocateIds($datasetId, \Google\Service\Datastore\AllocateIdsRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('allocateIds', array($params), 'Google\Service\Datastore\AllocateIdsResponse');
  }
  /**
   * Begin a new transaction. (datasets.beginTransaction)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_BeginTransactionRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\BeginTransactionResponse
   */
  public function beginTransaction($datasetId, \Google\Service\Datastore\BeginTransactionRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('beginTransaction', array($params), 'Google\Service\Datastore\BeginTransactionResponse');
  }
  /**
   * Commit a transaction, optionally creating, deleting or modifying some
   * entities. (datasets.commit)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_CommitRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\CommitResponse
   */
  public function commit($datasetId, \Google\Service\Datastore\CommitRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('commit', array($params), 'Google\Service\Datastore\CommitResponse');
  }
  /**
   * Look up some entities by key. (datasets.lookup)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_LookupRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\LookupResponse
   */
  public function lookup($datasetId, \Google\Service\Datastore\LookupRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('lookup', array($params), 'Google\Service\Datastore\LookupResponse');
  }
  /**
   * Roll back a transaction. (datasets.rollback)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_RollbackRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\RollbackResponse
   */
  public function rollback($datasetId, \Google\Service\Datastore\RollbackRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('rollback', array($params), 'Google\Service\Datastore\RollbackResponse');
  }
  /**
   * Query for entities. (datasets.runQuery)
   *
   * @param string $datasetId
   * Identifies the dataset.
   * @param Google_RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Datastore\RunQueryResponse
   */
  public function runQuery($datasetId, \Google\Service\Datastore\RunQueryRequest $postBody, $optParams = array())
  {
    $params = array('datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('runQuery', array($params), 'Google\Service\Datastore\RunQueryResponse');
  }
}
