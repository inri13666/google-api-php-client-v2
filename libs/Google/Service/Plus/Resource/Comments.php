<?php 
namespace Google\Service\Plus\Resource;
class Comments extends \Google\Resource\Service
{

  /**
   * Get a comment. (comments.get)
   *
   * @param string $commentId
   * The ID of the comment to get.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Plus\Comment
   */
  public function get($commentId, $optParams = array())
  {
    $params = array('commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Plus\Comment');
  }
  /**
   * List all of the comments for an activity. (comments.listComments)
   *
   * @param string $activityId
   * The ID of the activity to get comments for.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string pageToken
   * The continuation token, which is used to page through large result sets. To get the next page of
    * results, set this parameter to the value of "nextPageToken" from the previous response.
   * @opt_param string sortOrder
   * The order in which to sort the list of comments.
   * @opt_param string maxResults
   * The maximum number of comments to include in the response, which is used for paging. For any
    * response, the actual number returned might be less than the specified maxResults.
   * @return \Google\Service\Plus\CommentFeed
   */
  public function listComments($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Plus\CommentFeed');
  }
}
