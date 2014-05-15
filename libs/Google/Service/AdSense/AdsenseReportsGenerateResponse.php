<?php 
namespace Google\Service\AdSense;
class AdsenseReportsGenerateResponse extends \Google\Collection
{
  public $averages;
  public $endDate;
  protected $headersType = 'Google\Service\AdSense\AdsenseReportsGenerateResponseHeaders';
  protected $headersDataType = 'array';
  public $kind;
  public $rows;
  public $startDate;
  public $totalMatchedRows;
  public $totals;
  public $warnings;

  public function setAverages($averages)
  {
    $this->averages = $averages;
  }

  public function getAverages()
  {
    return $this->averages;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setHeaders($headers)
  {
    $this->headers = $headers;
  }

  public function getHeaders()
  {
    return $this->headers;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setTotalMatchedRows($totalMatchedRows)
  {
    $this->totalMatchedRows = $totalMatchedRows;
  }

  public function getTotalMatchedRows()
  {
    return $this->totalMatchedRows;
  }

  public function setTotals($totals)
  {
    $this->totals = $totals;
  }

  public function getTotals()
  {
    return $this->totals;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }

  public function getWarnings()
  {
    return $this->warnings;
  }
}
