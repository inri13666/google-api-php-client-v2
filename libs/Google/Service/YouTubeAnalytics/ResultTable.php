<?php 
namespace Google\Service\YouTubeAnalytics;
class ResultTable extends \Google\Collection
{
  protected $columnHeadersType = 'Google\Service\YouTubeAnalytics\ResultTableColumnHeaders';
  protected $columnHeadersDataType = 'array';
  public $kind;
  public $rows;

  public function setColumnHeaders($columnHeaders)
  {
    $this->columnHeaders = $columnHeaders;
  }

  public function getColumnHeaders()
  {
    return $this->columnHeaders;
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
}
