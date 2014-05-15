<?php 
namespace Google\Service\Compute\Resource;
class Images extends \Google\Resource\Service
{

  /**
   * Deletes the specified image resource. (images.delete)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $image
   * Name of the image resource to delete.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function delete($project, $image, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image);
    $params = array_merge($params, $optParams);
    return $this->call('delete', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Sets the deprecation status of an image. If no message body is given, clears
   * the deprecation status instead. (images.deprecate)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $image
   * Image name.
   * @param Google_DeprecationStatus $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function deprecate($project, $image, \Google\Service\Compute\DeprecationStatus $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('deprecate', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Returns the specified image resource. (images.get)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param string $image
   * Name of the image resource to return.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Image
   */
  public function get($project, $image, $optParams = array())
  {
    $params = array('project' => $project, 'image' => $image);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Image');
  }
  /**
   * Creates an image resource in the specified project using the data included in
   * the request. (images.insert)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_Image $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function insert($project, \Google\Service\Compute\Image $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('insert', array($params), 'Google\Service\Compute\Operation');
  }
  /**
   * Retrieves the list of image resources available to the specified project.
   * (images.listImages)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param array $optParams Optional parameters.
   *
   * @opt_param string filter
   * Optional. Filter expression for filtering listed resources.
   * @opt_param string pageToken
   * Optional. Tag returned by a previous list request truncated by maxResults. Used to continue a
    * previous list request.
   * @opt_param string maxResults
   * Optional. Maximum count of results to be returned. Maximum value is 500 and default value is
    * 500.
   * @return \Google\Service\Compute\ImageList
   */
  public function listImages($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\Compute\ImageList');
  }
}
