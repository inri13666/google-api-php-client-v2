<?php 
namespace Google\Service\DoubleClickBidManager;
class Query extends \Google\Model
{
  public $kind;
  protected $metadataType = 'Google\Service\DoubleClickBidManager\QueryMetadata';
  protected $metadataDataType = '';
  protected $paramsType = 'Google\Service\DoubleClickBidManager\Parameters';
  protected $paramsDataType = '';
  public $queryId;
  public $reportDataEndTimeMs;
  public $reportDataStartTimeMs;
  protected $scheduleType = 'Google\Service\DoubleClickBidManager\QuerySchedule';
  protected $scheduleDataType = '';
  public $timezoneCode;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMetadata(\Google\Service\DoubleClickBidManager\QueryMetadata $metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
  }

  public function setParams(\Google\Service\DoubleClickBidManager\Parameters $params)
  {
    $this->params = $params;
  }

  public function getParams()
  {
    return $this->params;
  }

  public function setQueryId($queryId)
  {
    $this->queryId = $queryId;
  }

  public function getQueryId()
  {
    return $this->queryId;
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

  public function setSchedule(\Google\Service\DoubleClickBidManager\QuerySchedule $schedule)
  {
    $this->schedule = $schedule;
  }

  public function getSchedule()
  {
    return $this->schedule;
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
