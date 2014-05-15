<?php 
namespace Google\Service\Dns\Resource;
class Projects extends \Google\Resource\Service
{

  /**
   * Fetch the representation of an existing Project. (projects.get)
   *
   * @param string $project
   * Identifies the project addressed by this request.
   * @param array $optParams Optional parameters.
   * @return \Google\Service\Dns\Project
   */
  public function get($project, $optParams = array())
  {
    $params = array('project' => $project);
    $params = array_merge($params, $optParams);
    return $this->call('get', array($params), 'Google\Service\Dns\Project');
  }
}
