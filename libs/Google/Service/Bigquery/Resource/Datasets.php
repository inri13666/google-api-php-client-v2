<?php 
namespace Google\Service\Bigquery\Resource;
class Datasets extends \Google\Resource\Service
{

  /**
   * Deletes the dataset specified by the datasetId value. Before you can delete a
   * dataset, you must delete all its tables, either manually or by specifying
   * deleteContents. Immediately after deletion, you can create another dataset
   * with the same name. (datasets.delete)
   *
   * @param string $projectId
   * Project ID of the dataset being deleted
   * @param string $datasetId
   * Dataset ID of dataset being deleted
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool deleteContents
   * If True, delete all the tables in the dataset. If False and the dataset contains tables, the
    * request will fail. Default is False
   */
  public function delete($projectId, $datasetId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Returns the dataset specified by datasetID. (datasets.get)
   *
   * @param string $projectId
   * Project ID of the requested dataset
   * @param string $datasetId
   * Dataset ID of the requested dataset
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Dataset
   */
  public function get($projectId, $datasetId, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Bigquery\Dataset');
  }
  /**
   * Creates a new empty dataset. (datasets.insert)
   *
   * @param string $projectId
   * Project ID of the new dataset
   * @param Google_Dataset $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Dataset
   */
  public function insert($projectId, \Google\Service\Bigquery\Dataset $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Bigquery\Dataset');
  }
  /**
   * Lists all the datasets in the specified project to which the caller has read
   * access; however, a project owner can list (but not necessarily get) all
   * datasets in his project. (datasets.listDatasets)
   *
   * @param string $projectId
   * Project ID of the datasets to be listed
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * Page token, returned by a previous call, to request the next page of results
   * @opt_param bool all
   * Whether to list all datasets, including hidden ones
   * @opt_param string maxResults
   * The maximum number of results to return
   * @return \Google\Service\Bigquery\DatasetList
   */
  public function listDatasets($projectId, $optParams = array())
  {
    $params = array('projectId' => $projectId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Bigquery\DatasetList');
  }
  /**
   * Updates information in an existing dataset. The update method replaces the
   * entire dataset resource, whereas the patch method only replaces fields that
   * are provided in the submitted dataset resource. This method supports patch
   * semantics. (datasets.patch)
   *
   * @param string $projectId
   * Project ID of the dataset being updated
   * @param string $datasetId
   * Dataset ID of the dataset being updated
   * @param Google_Dataset $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Dataset
   */
  public function patch($projectId, $datasetId, \Google\Service\Bigquery\Dataset $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Bigquery\Dataset');
  }
  /**
   * Updates information in an existing dataset. The update method replaces the
   * entire dataset resource, whereas the patch method only replaces fields that
   * are provided in the submitted dataset resource. (datasets.update)
   *
   * @param string $projectId
   * Project ID of the dataset being updated
   * @param string $datasetId
   * Dataset ID of the dataset being updated
   * @param Google_Dataset $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Bigquery\Dataset
   */
  public function update($projectId, $datasetId, \Google\Service\Bigquery\Dataset $postBody, $optParams = array())
  {
    $params = array('projectId' => $projectId, 'datasetId' => $datasetId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Bigquery\Dataset');
  }
}
