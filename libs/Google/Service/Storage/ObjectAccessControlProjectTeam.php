<?php 
namespace Google\Service\Storage;
class ObjectAccessControlProjectTeam extends \Google\Model
{
  public $projectNumber;
  public $team;

  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }

  public function getProjectNumber()
  {
    return $this->projectNumber;
  }

  public function setTeam($team)
  {
    $this->team = $team;
  }

  public function getTeam()
  {
    return $this->team;
  }
}
