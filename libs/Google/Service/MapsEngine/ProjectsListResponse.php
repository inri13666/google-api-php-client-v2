<?php 
namespace Google\Service\MapsEngine;
class ProjectsListResponse extends \Google\Collection
{
  protected $projectsType = 'Google\Service\MapsEngine\Project';
  protected $projectsDataType = 'array';

  public function setProjects($projects)
  {
    $this->projects = $projects;
  }

  public function getProjects()
  {
    return $this->projects;
  }
}
