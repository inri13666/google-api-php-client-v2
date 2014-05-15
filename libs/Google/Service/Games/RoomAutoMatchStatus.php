<?php 
namespace Google\Service\Games;
class RoomAutoMatchStatus extends \Google\Model
{
  public $kind;
  public $waitEstimateSeconds;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setWaitEstimateSeconds($waitEstimateSeconds)
  {
    $this->waitEstimateSeconds = $waitEstimateSeconds;
  }

  public function getWaitEstimateSeconds()
  {
    return $this->waitEstimateSeconds;
  }
}
