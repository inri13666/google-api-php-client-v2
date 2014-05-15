<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequestTimeRange extends \Google\Model
{
  public $changedAttributesSinceTimestamp;
  public $changedMetricsSinceTimestamp;
  public $endDate;
  public $startDate;

  public function setChangedAttributesSinceTimestamp($changedAttributesSinceTimestamp)
  {
    $this->changedAttributesSinceTimestamp = $changedAttributesSinceTimestamp;
  }

  public function getChangedAttributesSinceTimestamp()
  {
    return $this->changedAttributesSinceTimestamp;
  }

  public function setChangedMetricsSinceTimestamp($changedMetricsSinceTimestamp)
  {
    $this->changedMetricsSinceTimestamp = $changedMetricsSinceTimestamp;
  }

  public function getChangedMetricsSinceTimestamp()
  {
    return $this->changedMetricsSinceTimestamp;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
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
