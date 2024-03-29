<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequest extends \Google\Collection
{
  protected $columnsType = 'Google\Service\Doubleclicksearch\ReportRequestColumns';
  protected $columnsDataType = 'array';
  public $downloadFormat;
  protected $filtersType = 'Google\Service\Doubleclicksearch\ReportRequestFilters';
  protected $filtersDataType = 'array';
  public $includeDeletedEntities;
  public $includeRemovedEntities;
  public $maxRowsPerFile;
  protected $orderByType = 'Google\Service\Doubleclicksearch\ReportRequestOrderBy';
  protected $orderByDataType = 'array';
  protected $reportScopeType = 'Google\Service\Doubleclicksearch\ReportRequestReportScope';
  protected $reportScopeDataType = '';
  public $reportType;
  public $rowCount;
  public $startRow;
  public $statisticsCurrency;
  protected $timeRangeType = 'Google\Service\Doubleclicksearch\ReportRequestTimeRange';
  protected $timeRangeDataType = '';
  public $verifySingleTimeZone;

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setDownloadFormat($downloadFormat)
  {
    $this->downloadFormat = $downloadFormat;
  }

  public function getDownloadFormat()
  {
    return $this->downloadFormat;
  }

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setIncludeDeletedEntities($includeDeletedEntities)
  {
    $this->includeDeletedEntities = $includeDeletedEntities;
  }

  public function getIncludeDeletedEntities()
  {
    return $this->includeDeletedEntities;
  }

  public function setIncludeRemovedEntities($includeRemovedEntities)
  {
    $this->includeRemovedEntities = $includeRemovedEntities;
  }

  public function getIncludeRemovedEntities()
  {
    return $this->includeRemovedEntities;
  }

  public function setMaxRowsPerFile($maxRowsPerFile)
  {
    $this->maxRowsPerFile = $maxRowsPerFile;
  }

  public function getMaxRowsPerFile()
  {
    return $this->maxRowsPerFile;
  }

  public function setOrderBy($orderBy)
  {
    $this->orderBy = $orderBy;
  }

  public function getOrderBy()
  {
    return $this->orderBy;
  }

  public function setReportScope(\Google\Service\Doubleclicksearch\ReportRequestReportScope $reportScope)
  {
    $this->reportScope = $reportScope;
  }

  public function getReportScope()
  {
    return $this->reportScope;
  }

  public function setReportType($reportType)
  {
    $this->reportType = $reportType;
  }

  public function getReportType()
  {
    return $this->reportType;
  }

  public function setRowCount($rowCount)
  {
    $this->rowCount = $rowCount;
  }

  public function getRowCount()
  {
    return $this->rowCount;
  }

  public function setStartRow($startRow)
  {
    $this->startRow = $startRow;
  }

  public function getStartRow()
  {
    return $this->startRow;
  }

  public function setStatisticsCurrency($statisticsCurrency)
  {
    $this->statisticsCurrency = $statisticsCurrency;
  }

  public function getStatisticsCurrency()
  {
    return $this->statisticsCurrency;
  }

  public function setTimeRange(\Google\Service\Doubleclicksearch\ReportRequestTimeRange $timeRange)
  {
    $this->timeRange = $timeRange;
  }

  public function getTimeRange()
  {
    return $this->timeRange;
  }

  public function setVerifySingleTimeZone($verifySingleTimeZone)
  {
    $this->verifySingleTimeZone = $verifySingleTimeZone;
  }

  public function getVerifySingleTimeZone()
  {
    return $this->verifySingleTimeZone;
  }
}
