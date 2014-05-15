<?php 
namespace Google\Service\YouTubeAnalytics;
class BatchReportTemplate extends \Google\Collection
{
  public $id;
  protected $outputsType = 'Google\Service\YouTubeAnalytics\BatchReportTemplateOutputs';
  protected $outputsDataType = 'array';
  public $reportId;
  protected $timeSpanType = 'Google\Service\YouTubeAnalytics\BatchReportTemplateTimeSpan';
  protected $timeSpanDataType = '';
  public $timeUpdated;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setOutputs($outputs)
  {
    $this->outputs = $outputs;
  }

  public function getOutputs()
  {
    return $this->outputs;
  }

  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }

  public function getReportId()
  {
    return $this->reportId;
  }

  public function setTimeSpan(\Google\Service\YouTubeAnalytics\BatchReportTemplateTimeSpan $timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setTimeUpdated($timeUpdated)
  {
    $this->timeUpdated = $timeUpdated;
  }

  public function getTimeUpdated()
  {
    return $this->timeUpdated;
  }
}
