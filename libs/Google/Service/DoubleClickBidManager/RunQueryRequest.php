<?php 
namespace Google\Service\DoubleClickBidManager;
class RunQueryRequest extends \Google\Model
{
  public $dataRange;
  public $reportDataEndTimeMs;
  public $reportDataStartTimeMs;
  public $timezoneCode;

  public function setDataRange($dataRange)
  {
    $this->dataRange = $dataRange;
  }

  public function getDataRange()
  {
    return $this->dataRange;
  }

  public function setReportDataEndTimeMs($reportDataEndTimeMs)
  {
    $this->reportDataEndTimeMs = $reportDataEndTimeMs;
  }

  public function getReportDataEndTimeMs()
  {
    return $this->reportDataEndTimeMs;
  }

  public function setReportDataStartTimeMs($reportDataStartTimeMs)
  {
    $this->reportDataStartTimeMs = $reportDataStartTimeMs;
  }

  public function getReportDataStartTimeMs()
  {
    return $this->reportDataStartTimeMs;
  }

  public function setTimezoneCode($timezoneCode)
  {
    $this->timezoneCode = $timezoneCode;
  }

  public function getTimezoneCode()
  {
    return $this->timezoneCode;
  }
}
