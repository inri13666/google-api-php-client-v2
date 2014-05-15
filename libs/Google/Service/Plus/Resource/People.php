<?php 
namespace Google\Service\Plus\Resource;
class People extends \Google\Resource\Service
{

  /**
   * Get a person's profile. If your app uses scope
   * https://www.googleapis.com/auth/plus.login, this method is guaranteed to
   * return ageRange and language. (people.get)
   *
   * @param string $userId
   * The ID of the person to get the profile for. The special value "me" can be used to indicate the
    * authenticated user.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Plus\Person
   */
  public function get($userId, $optParams = array())
  {
    $params = array('userId' => $userId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Plus\Person');
  }
  /**
   * List all of the people in the specified collection. (people.listPeople)
   *
   * @param string $userId
   * Get the collection of people for the person identified. Use "me" to indicate the authenticated
    * user.
   * @param string $collection
   * The collection of people to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * The order to return people in.
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of people to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\Plus\PeopleFeed
   */
  public function listPeople($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Plus\PeopleFeed');
  }
  /**
   * List all of the people in the specified collection for a particular activity.
   * (people.listByActivity)
   *
   * @param string $activityId
   * The ID of the activity to get the list of people for.
   * @param string $collection
   * The collection of people to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string maxResults
   * The maximum number of people to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\Plus\PeopleFeed
   */
  public function listByActivity($activityId, $collection, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('listByActivity', array($params), 'Google\Service\Plus\PeopleFeed');
  }
  /**
   * Search all public profiles. (people.search)
   *
   * @param string $query
   * Specify a query string for full text search of public text in all profiles.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response. This
    * token can be of any length.
   * @opt_param string maxResults
   * The maximum number of people to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @opt_param string language
   * Specify the preferred language to search with. See search language codes for available values.
   * @return \Google\Service\Plus\PeopleFeed
   */
  public function search($query, $optParams = array())
  {
    $params = array('query' => $query);
    $params = array_merge($params, $optParams);
    return $this->call('search', array($params), 'Google\Service\Plus\PeopleFeed');
  }
}
