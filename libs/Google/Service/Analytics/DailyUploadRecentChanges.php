<?php 
namespace Google\Service\Analytics;
class DailyUploadRecentChanges extends \Google\Model
{
  public $change;
  public $time;

  public function setChange($change)
  {
    $this->change = $change;
  }

  public function getChange()
  {
    return $this->change;
  }

  public function setTime($time)
  {
    $this->time = $time;
  }

  public function getTime()
  {
    return $this->time;
  }
}
