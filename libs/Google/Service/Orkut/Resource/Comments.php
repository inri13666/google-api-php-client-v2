<?php 
namespace Google\Service\Orkut\Resource;
class Comments extends \Google\Resource\Service
{

  /**
   * Deletes an existing comment. (comments.delete)
   *
   * @param string $commentId
   * ID of the comment to remove.
   * @param array $optParams Optional parameters.
   */
  public function delete($commentId, $optParams = array())
  {
    $params = array('commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Retrieves an existing comment. (comments.get)
   *
   * @param string $commentId
   * ID of the comment to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\Comment
   */
  public function get($commentId, $optParams = array())
  {
    $params = array('commentId' => $commentId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Orkut\Comment');
  }
  /**
   * Inserts a new comment to an activity. (comments.insert)
   *
   * @param string $activityId
   * The ID of the activity to contain the new comment.
   * @param Google_Comment $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Orkut\Comment
   */
  public function insert($activityId, \Google\Service\Orkut\Comment $postBody, $optParams = array())
  {
    $params = array('activityId' => $activityId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Orkut\Comment');
  }
  /**
   * Retrieves a list of comments, possibly filtered. (comments.listComments)
   *
   * @param string $activityId
   * The ID of the activity containing the comments.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Sort search results.
   * @opt_param string pageToken
   * A continuation token that allows pagination.
   * @opt_param string maxResults
   * The maximum number of activities to include in the response.
   * @opt_param string hl
   * Specifies the interface language (host language) of your user interface.
   * @return \Google\Service\Orkut\CommentList
   */
  public function listComments($activityId, $optParams = array())
  {
    $params = array('activityId' => $activityId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Orkut\CommentList');
  }
}
