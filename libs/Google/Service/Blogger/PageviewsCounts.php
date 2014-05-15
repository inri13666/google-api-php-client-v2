<?php 
namespace Google\Service\Blogger;
class PageviewsCounts extends \Google\Model
{
  public $count;
  public $timeRange;

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setTimeRange($timeRange)
  {
    $this->timeRange = $timeRange;
  }

  public function getTimeRange()
  {
    return $this->timeRange;
  }
}
