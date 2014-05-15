<?php 
namespace Google\Service\Dfareporting;
class DateRange extends \Google\Model
{
  public $endDate;
  public $kind;
  public $relativeDateRange;
  public $startDate;

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRelativeDateRange($relativeDateRange)
  {
    $this->relativeDateRange = $relativeDateRange;
  }

  public function getRelativeDateRange()
  {
    return $this->relativeDateRange;
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
