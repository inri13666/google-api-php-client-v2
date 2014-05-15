<?php 
namespace Google\Service\Taskqueue;
class TaskQueueStats extends \Google\Model
{
  public $leasedLastHour;
  public $leasedLastMinute;
  public $oldestTask;
  public $totalTasks;

  public function setLeasedLastHour($leasedLastHour)
  {
    $this->leasedLastHour = $leasedLastHour;
  }

  public function getLeasedLastHour()
  {
    return $this->leasedLastHour;
  }

  public function setLeasedLastMinute($leasedLastMinute)
  {
    $this->leasedLastMinute = $leasedLastMinute;
  }

  public function getLeasedLastMinute()
  {
    return $this->leasedLastMinute;
  }

  public function setOldestTask($oldestTask)
  {
    $this->oldestTask = $oldestTask;
  }

  public function getOldestTask()
  {
    return $this->oldestTask;
  }

  public function setTotalTasks($totalTasks)
  {
    $this->totalTasks = $totalTasks;
  }

  public function getTotalTasks()
  {
    return $this->totalTasks;
  }
}
