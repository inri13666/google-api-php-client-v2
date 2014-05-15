<?php 
namespace Google\Service\Spectrum;
class EventTime extends \Google\Model
{
  public $startTime;
  public $stopTime;

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStopTime($stopTime)
  {
    $this->stopTime = $stopTime;
  }

  public function getStopTime()
  {
    return $this->stopTime;
  }
}
