<?php 
namespace Google\Service\Coordinate;
class Schedule extends \Google\Model
{
  public $allDay;
  public $duration;
  public $endTime;
  public $kind;
  public $startTime;

  public function setAllDay($allDay)
  {
    $this->allDay = $allDay;
  }

  public function getAllDay()
  {
    return $this->allDay;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}
