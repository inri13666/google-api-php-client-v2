<?php 
namespace Google\Service\QPXExpress;
class TimeOfDayRange extends \Google\Model
{
  public $earliestTime;
  public $kind;
  public $latestTime;

  public function setEarliestTime($earliestTime)
  {
    $this->earliestTime = $earliestTime;
  }

  public function getEarliestTime()
  {
    return $this->earliestTime;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLatestTime($latestTime)
  {
    $this->latestTime = $latestTime;
  }

  public function getLatestTime()
  {
    return $this->latestTime;
  }
}
