<?php 
namespace Google\Service\Doubleclicksearch;
class Report extends \Google\Collection
{
  protected $filesType = 'Google\Service\Doubleclicksearch\ReportFiles';
  protected $filesDataType = 'array';
  public $id;
  public $isReportReady;
  public $kind;
  protected $requestType = 'Google\Service\Doubleclicksearch\ReportRequest';
  protected $requestDataType = '';
  public $rowCount;
  public $rows;
  public $statisticsCurrencyCode;
  public $statisticsTimeZone;

  public function setFiles($files)
  {
    $this->files = $files;
  }

  public function getFiles()
  {
    return $this->files;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsReportReady($isReportReady)
  {
    $this->isReportReady = $isReportReady;
  }

  public function getIsReportReady()
  {
    return $this->isReportReady;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequest(\Google\Service\Doubleclicksearch\ReportRequest $request)
  {
    $this->request = $request;
  }

  public function getRequest()
  {
    return $this->request;
  }

  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }

  public function getRowCount()
  {
    return $this->rowCount;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }

  public function setStatisticsCurrencyCode($statisticsCurrencyCode)
  {
    $this->statisticsCurrencyCode = $statisticsCurrencyCode;
  }

  public function getStatisticsCurrencyCode()
  {
    return $this->statisticsCurrencyCode;
  }

  public function setStatisticsTimeZone($statisticsTimeZone)
  {
    $this->statisticsTimeZone = $statisticsTimeZone;
  }

  public function getStatisticsTimeZone()
  {
    return $this->statisticsTimeZone;
  }
}
