<?php 
namespace Google\Service\CivicInfo;
class Election extends \Google\Model
{
  public $electionDay;
  public $id;
  public $name;

  public function setElectionDay($electionDay)
  {
    $this->electionDay = $electionDay;
  }

  public function getElectionDay()
  {
    return $this->electionDay;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
