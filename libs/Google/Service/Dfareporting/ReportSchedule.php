<?php 
namespace Google\Service\Dfareporting;
class ReportSchedule extends \Google\Collection
{
  public $active;
  public $every;
  public $expirationDate;
  public $repeats;
  public $repeatsOnWeekDays;
  public $runsOnDayOfMonth;
  public $startDate;

  public function setActive($active)
  {
    $this->active = $active;
  }

  public function getActive()
  {
    return $this->active;
  }

  public function setEvery($every)
  {
    $this->every = $every;
  }

  public function getEvery()
  {
    return $this->every;
  }

  public function setExpirationDate($expirationDate)
  {
    $this->expirationDate = $expirationDate;
  }

  public function getExpirationDate()
  {
    return $this->expirationDate;
  }

  public function setRepeats($repeats)
  {
    $this->repeats = $repeats;
  }

  public function getRepeats()
  {
    return $this->repeats;
  }

  public function setRepeatsOnWeekDays($repeatsOnWeekDays)
  {
    $this->repeatsOnWeekDays = $repeatsOnWeekDays;
  }

  public function getRepeatsOnWeekDays()
  {
    return $this->repeatsOnWeekDays;
  }

  public function setRunsOnDayOfMonth($runsOnDayOfMonth)
  {
    $this->runsOnDayOfMonth = $runsOnDayOfMonth;
  }

  public function getRunsOnDayOfMonth()
  {
    return $this->runsOnDayOfMonth;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }
}
