<?php 
namespace Google\Service\Blogger\Resource;
class PageViews extends \Google\Resource\Service
{

  /**
   * Retrieve pageview stats for a Blog. (pageViews.get)
   *
   * @param string $blogId
   * The ID of the blog to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string range
   *
   * @return \Google\Service\Blogger\Pageviews
   */
  public function get($blogId, $optParams = array())
  {
    $params = array('blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Blogger\Pageviews');
  }
}
