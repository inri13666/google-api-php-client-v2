<?php 
namespace Google\Service\Blogger\Resource;
class BlogUserInfos extends \Google\Resource\Service
{

  /**
   * Gets one blog and user info pair by blogId and userId. (blogUserInfos.get)
   *
   * @param string $userId
   * ID of the user whose blogs are to be fetched. Either the word 'self' (sans quote marks) or the
    * user's profile identifier.
   * @param string $blogId
   * The ID of the blog to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string maxPosts
   * Maximum number of posts to pull back with the blog.
   * @return \Google\Service\Blogger\BlogUserInfo
   */
  public function get($userId, $blogId, $optParams = array())
  {
    $params = array('userId' => $userId, 'blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Blogger\BlogUserInfo');
  }
}
