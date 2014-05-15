<?php 
namespace Google\Service\Blogger\Resource;
class Pages extends \Google\Resource\Service
{

  /**
   * Delete a page by id. (pages.delete)
   *
   * @param string $blogId
   * The Id of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param array $optParams Optional parameters.
   */
  public function delete($blogId, $pageId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params));
  }
  /**
   * Gets one blog page by id. (pages.get)
   *
   * @param string $blogId
   * ID of the blog containing the page.
   * @param string $pageId
   * The ID of the page to get.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string view
   *
   * @return \Google\Service\Blogger\Page
   */
  public function get($blogId, $pageId, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Blogger\Page');
  }
  /**
   * Add a page. (pages.insert)
   *
   * @param string $blogId
   * ID of the blog to add the page to.
   * @param Google_Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function insert($blogId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Blogger\Page');
  }
  /**
   * Retrieves the pages for a blog, optionally including non-LIVE statuses.
   * (pages.listPages)
   *
   * @param string $blogId
   * ID of the blog to fetch pages from.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string status
   *
   * @opt_param bool fetchBodies
   * Whether to retrieve the Page bodies.
   * @opt_param string view
   * Access level with which to view the returned result. Note that some fields require elevated
    * access.
   * @return \Google\Service\Blogger\PageList
   */
  public function listPages($blogId, $optParams = array())
  {
    $params = array('blogId' => $blogId);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Blogger\PageList');
  }
  /**
   * Update a page. This method supports patch semantics. (pages.patch)
   *
   * @param string $blogId
   * The ID of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param Google_Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function patch($blogId, $pageId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('patch', array($params), 'Google\Service\Blogger\Page');
  }
  /**
   * Update a page. (pages.update)
   *
   * @param string $blogId
   * The ID of the Blog.
   * @param string $pageId
   * The ID of the Page.
   * @param Google_Page $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Blogger\Page
   */
  public function update($blogId, $pageId, \Google\Service\Blogger\Page $postBody, $optParams = array())
  {
    $params = array('blogId' => $blogId, 'pageId' => $pageId, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('update', array($params), 'Google\Service\Blogger\Page');
  }
}
