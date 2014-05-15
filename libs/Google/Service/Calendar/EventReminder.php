<?php 
namespace Google\Service\Calendar;
class EventReminder extends \Google\Model
{
  public $method;
  public $minutes;

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setMinutes($minutes)
  {
    $this->minutes = $minutes;
  }

  public function getMinutes()
  {
    return $this->minutes;
  }
}
