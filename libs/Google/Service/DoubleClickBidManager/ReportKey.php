<?php 
namespace Google\Service\DoubleClickBidManager;
class ReportKey extends \Google\Model
{
  public $queryId;
  public $reportId;

  public function setQueryId($queryId)
  {
    $this->queryId = $queryId;
  }

  public function getQueryId()
  {
    return $this->queryId;
  }

  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }

  public function getReportId()
  {
    return $this->reportId;
  }
}
