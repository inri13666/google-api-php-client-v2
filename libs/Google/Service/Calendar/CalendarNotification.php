<?php 
namespace Google\Service\Calendar;
class CalendarNotification extends \Google\Model
{
  public $method;
  public $type;

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
