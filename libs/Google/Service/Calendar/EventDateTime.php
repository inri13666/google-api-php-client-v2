<?php 
namespace Google\Service\Calendar;
class EventDateTime extends \Google\Model
{
  public $date;
  public $dateTime;
  public $timeZone;

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setDateTime($dateTime)
  {
    $this->dateTime = $dateTime;
  }

  public function getDateTime()
  {
    return $this->dateTime;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }
}
