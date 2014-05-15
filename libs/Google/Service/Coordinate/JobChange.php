<?php 
namespace Google\Service\Coordinate;
class JobChange extends \Google\Model
{
  public $kind;
  protected $stateType = 'Google\Service\Coordinate\JobState';
  protected $stateDataType = '';
  public $timestamp;

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

  public function setTimestamp($timestamp)
  {
    $this->timestamp = $timestamp;
  }

  public function getTimestamp()
  {
    return $this->timestamp;
  }
}
