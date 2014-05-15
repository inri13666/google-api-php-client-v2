<?php 
namespace Google\Service\DoubleClickBidManager;
class QuerySchedule extends \Google\Model
{
  public $endTimeMs;
  public $frequency;
  public $nextRunMinuteOfDay;
  public $nextRunTimezoneCode;

  public function setEndTimeMs($endTimeMs)
  {
    $this->endTimeMs = $endTimeMs;
  }

  public function getEndTimeMs()
  {
    return $this->endTimeMs;
  }

  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }

  public function getFrequency()
  {
    return $this->frequency;
  }

  public function setNextRunMinuteOfDay($nextRunMinuteOfDay)
  {
    $this->nextRunMinuteOfDay = $nextRunMinuteOfDay;
  }

  public function getNextRunMinuteOfDay()
  {
    return $this->nextRunMinuteOfDay;
  }

  public function setNextRunTimezoneCode($nextRunTimezoneCode)
  {
    $this->nextRunTimezoneCode = $nextRunTimezoneCode;
  }

  public function getNextRunTimezoneCode()
  {
    return $this->nextRunTimezoneCode;
  }
}
