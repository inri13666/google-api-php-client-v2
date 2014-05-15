<?php 
namespace Google\Service\DoubleClickBidManager\Resource;
class Queries extends \Google\Resource\Service
{

  /**
   * Creates a query. (queries.createquery)
   *
   * @param Google_Query $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\Query
   */
  public function createquery(\Google\Service\DoubleClickBidManager\Query $postBody, $optParams = array())
  {
    $params = array('postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('createquery', array($params), 'Google\Service\DoubleClickBidManager\Query');
  }
  /**
   * Deletes a stored query as well as the associated stored reports.
   * (queries.deletequery)
   *
   * @param string $queryId
   * Query ID to delete.
   * @param array $optParams Optional parameters.
   */
  public function deletequery($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('deletequery', array($params));
  }
  /**
   * Retrieves a stored query. (queries.getquery)
   *
   * @param string $queryId
   * Query ID to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\Query
   */
  public function getquery($queryId, $optParams = array())
  {
    $params = array('queryId' => $queryId);
    $params = array_merge($params, $optParams);
    return $this->call('getquery', array($params), 'Google\Service\DoubleClickBidManager\Query');
  }
  /**
   * Retrieves stored queries. (queries.listqueries)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\DoubleClickBidManager\ListQueriesResponse
   */
  public function listqueries($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('listqueries', array($params), 'Google\Service\DoubleClickBidManager\ListQueriesResponse');
  }
  /**
   * Runs a stored query to generate a report. (queries.runquery)
   *
   * @param string $queryId
   * Query ID to run.
   * @param Google_RunQueryRequest $postBody
   * @param array $optParams Optional parameters.
   */
  public function runquery($queryId, \Google\Service\DoubleClickBidManager\RunQueryRequest $postBody, $optParams = array())
  {
    $params = array('queryId' => $queryId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('runquery', array($params));
  }
}
