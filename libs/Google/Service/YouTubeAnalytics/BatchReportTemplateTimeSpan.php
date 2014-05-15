<?php 
namespace Google\Service\YouTubeAnalytics;
class BatchReportTemplateTimeSpan extends \Google\Model
{
  public $endTime;
  public $startTime;

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}
