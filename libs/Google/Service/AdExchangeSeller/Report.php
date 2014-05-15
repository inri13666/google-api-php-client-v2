<?php 
namespace Google\Service\AdExchangeSeller;
class Report extends \Google\Collection
{
  public $averages;
  protected $headersType = 'Google\Service\AdExchangeSeller\ReportHeaders';
  protected $headersDataType = 'array';
  public $kind;
  public $rows;
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
