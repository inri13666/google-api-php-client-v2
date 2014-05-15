<?php 
namespace Google\Service\MapsEngine\Resource;
class Projects extends \Google\Resource\Service
{

  /**
   * Return all projects readable by the current user. (projects.listProjects)
   *
   * @param array $optParams Optional parameters.
   * @return \Google\Service\MapsEngine\ProjectsListResponse
   */
  public function listProjects($optParams = array())
  {
    $params = array();
    $params = array_merge($params, $optParams);
    return $this->call('list', array($params), 'Google\Service\MapsEngine\ProjectsListResponse');
  }
}
