<?php 
namespace Google\Service\Calendar;
class TimePeriod extends \Google\Model
{
  public $end;
  public $start;

  public function setEnd($end)
  {
    $this->end = $end;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setStart($start)
  {
    $this->start = $start;
  }

  public function getStart()
  {
    return $this->start;
  }
}
