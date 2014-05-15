<?php 
namespace Google\Service\AdExchangeBuyer;
class PerformanceReportList extends \Google\Collection
{
  public $kind;
  protected $performanceReportType = 'Google\Service\AdExchangeBuyer\PerformanceReport';
  protected $performanceReportDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPerformanceReport($performanceReport)
  {
    $this->performanceReport = $performanceReport;
  }

  public function getPerformanceReport()
  {
    return $this->performanceReport;
  }
}
