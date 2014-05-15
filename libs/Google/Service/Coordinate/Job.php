<?php 
namespace Google\Service\Coordinate;
class Job extends \Google\Collection
{
  public $id;
  protected $jobChangeType = 'Google\Service\Coordinate\JobChange';
  protected $jobChangeDataType = 'array';
  public $kind;
  protected $stateType = 'Google\Service\Coordinate\JobState';
  protected $stateDataType = '';

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setJobChange($jobChange)
  {
    $this->jobChange = $jobChange;
  }

  public function getJobChange()
  {
    return $this->jobChange;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setState(\Google\Service\Coordinate\JobState $state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }
}
