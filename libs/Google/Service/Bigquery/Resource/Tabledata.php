<?php 
namespace Google\Service\Bigquery\Resource;
class Tabledata extends \Google\Resource\Service
{

  /**
   * Inserts the supplied rows into the table. (tabledata.insertAll)
   *
   * @param string $projectId
   * Project ID of the destination table.
   * @param string $datasetId
   * Dataset ID of the destination table.
   * @param string $tableId
   * Table ID of the destination table.
   * @param Google_TableDataInsertAllRequest $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\TableDataInsertAllResponse
   */
  public function insertAll($projectId, $datasetId, $tableId, \Google\Service\Bigquery\TableDataInsertAllRequest $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insertAll', array($params), 'Google\Service\Bigquery\TableDataInsertAllResponse');
  }
  /**
   * Retrieves table data from a specified set of rows. (tabledata.listTabledata)
   *
   * @param string $projectId
   * Project ID of the table to read
   * @param string $datasetId
   * Dataset ID of the table to read
   * @param string $tableId
   * Table ID of the table to read
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults
   * Maximum number of results to return
   * @opt_param string pageToken
   * Page token, returned by a previous call, identifying the result set
   * @opt_param string startIndex
   * Zero-based index of the starting row to read
   * @return \Google\Service\Bigquery\TableDataList
   */
  public function listTabledata($projectId, $datasetId, $tableId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'tableId' => $tableId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Bigquery\TableDataList');
  }
}
