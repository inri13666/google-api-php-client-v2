<?php 
namespace Google\Service\Blogger\Resource;
class PostUserInfos extends \Google\Resource\Service
{

  /**
   * Gets one post and user info pair, by post id and user id. The post user info
   * contains per-user information about the post, such as access rights, specific
   * to the user. (postUserInfos.get)
   *
   * @param string $userId
   * ID of the user for the per-user information to be fetched. Either the word 'self' (sans quote
    * marks) or the user's profile identifier.
   * @param string $blogId
   * The ID of the blog.
   * @param string $postId
   * The ID of the post to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxComments
   * Maximum number of comments to pull back on a post.
   * @return \Google\Service\Blogger\PostUserInfo
   */
  public function get($userId, $blogId, $postId, $optParams = array())
  {
    $params = array('userId' => $userId, 'blogId' => $blogId, 'postId' => $postId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Blogger\PostUserInfo');
  }
  /**
   * Retrieves a list of post and post user info pairs, possibly filtered. The
   * post user info contains per-user information about the post, such as access
   * rights, specific to the user. (postUserInfos.listPostUserInfos)
   *
   * @param string $userId
   * ID of the user for the per-user information to be fetched. Either the word 'self' (sans quote
    * marks) or the user's profile identifier.
   * @param string $blogId
   * ID of the blog to fetch posts from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string orderBy
   * Sort order applied to search results. Default is published.
   * @opt_param string startDate
   * Earliest post date to fetch, a date-time with RFC 3339 formatting.
   * @opt_param string endDate
   * Latest post date to fetch, a date-time with RFC 3339 formatting.
   * @opt_param string labels
   * Comma-separated list of labels to search for.
   * @opt_param string maxResults
   * Maximum number of posts to fetch.
   * @opt_param string pageToken
   * Continuation token if the request is paged.
   * @opt_param string status
   *
   * @opt_param bool fetchBodies
   * Whether the body content of posts is included. Default is false.
   * @opt_param string view
   * Access level with which to view the returned result. Note that some fields require elevated
    * access.
   * @return \Google\Service\Blogger\PostUserInfosList
   */
  public function listPostUserInfos($userId, $blogId, $optParams = array())
  {
    $params = array('userId' => $userId, 'blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Blogger\PostUserInfosList');
  }
}
