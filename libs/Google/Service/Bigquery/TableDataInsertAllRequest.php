<?php 
namespace Google\Service\Bigquery;
class TableDataInsertAllRequest extends \Google\Collection
{
  public $kind;
  protected $rowsType = 'Google\Service\Bigquery\TableDataInsertAllRequestRows';
  protected $rowsDataType = 'array';

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
