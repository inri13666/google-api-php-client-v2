<?php 
namespace Google\Service\Plus\Resource;
class Moments extends \Google\Resource\Service
{

  /**
   * Record a moment representing a user's activity such as making a purchase or
   * commenting on a blog. (moments.insert)
   *
   * @param string $userId
   * The ID of the user to record activities for. The only valid values are "me" and the ID of the
    * authenticated user.
   * @param string $collection
   * The collection to which to write moments.
   * @param Google_Moment $postBody
   * @param array $optParams Optional parameters.
   *
   * @opt_param bool debug
   * Return the moment as written. Should be used only for debugging.
   * @return \Google\Service\Plus\Moment
   */
  public function insert($userId, $collection, \Google\Service\Plus\Moment $postBody, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Plus\Moment');
  }
  /**
   * List all of the moments for a particular user. (moments.listMoments)
   *
   * @param string $userId
   * The ID of the user to get moments for. The special value "me" can be used to indicate the
    * authenticated user.
   * @param string $collection
   * The collection of moments to list.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxResults
   * The maximum number of moments to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string targetUrl
   * Only moments containing this targetUrl will be returned.
   * @opt_param string type
   * Only moments of this type will be returned.
   * @return \Google\Service\Plus\MomentsFeed
   */
  public function listMoments($userId, $collection, $optParams = array())
  {
    $params = array('userId' => $userId, 'collection' => $collection);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Plus\MomentsFeed');
  }
  /**
   * Delete a moment. (moments.remove)
   *
   * @param string $id
   * The ID of the moment to delete.
   * @param array $optParams Optional parameters.
   */
  public function remove($id, $optParams = array())
  {
    $params = array('id' => $id);
    $params = array_merge($params, $optParams);
    return $this->call('remove', array($params));
  }
}
