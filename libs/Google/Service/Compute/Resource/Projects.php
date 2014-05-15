<?php 
namespace Google\Service\Compute\Resource;
class Projects extends \Google\Resource\Service
{

  /**
   * Returns the specified project resource. (projects.get)
   *
   * @param string $project
   * Name of the project resource to retrieve.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Project
   */
  public function get($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Compute\Project');
  }
  /**
   * Sets metadata common to all instances within the specified project using the
   * data included in the request. (projects.setCommonInstanceMetadata)
   *
   * @param string $project
   * Name of the project scoping this request.
   * @param Google_Metadata $postBody
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Compute\Operation
   */
  public function setCommonInstanceMetadata($project, \Google\Service\Compute\Metadata $postBody, $optParams = array())
  {
    $params = array('project' => $project, 'postBody' => $postBody);
    $params = array_merge($params, $optParams);
    return $this->call('setCommonInstanceMetadata', array($params), 'Google\Service\Compute\Operation');
  }
}
