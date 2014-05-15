<?php 
namespace Google\Service\Plus\Resource;
class Activities extends \Google\Resource\Service
{

  /**
   * Get an activity. (activities.get)
   *
   * @param string $activityId
   * The ID of the activity to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Plus\Activity
   */
  public function get($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Plus\Activity');
  }
  /**
   * List all of the activities in the specified collection for a particular user.
   * (activities.listActivities)
   *
   * @param string $userId
   * The ID of the user to get activities for. The special value "me" can be used to indicate the
    * authenticated user.
   * @param string $collection
   * The collection of activities to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of activities to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\Plus\ActivityFeed
   */
  public function listActivities($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Plus\ActivityFeed');
  }
  /**
   * Search public activities. (activities.search)
   *
   * @param string $query
   * Full-text search query string.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Specifies how to order search results.
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response. This
    * token can be of any length.
   * @opt_param string maxResults
   * The maximum number of activities to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @opt_param string language
   * Specify the preferred language to search with. See search language codes for available values.
   * @return \Google\Service\Plus\ActivityFeed
   */
  public function search($query, $optParams = array())
  {
    $params = array('query' => $query);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), 'Google\Service\Plus\ActivityFeed');
  }
}
