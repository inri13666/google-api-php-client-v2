<?php 
namespace Google\Service\Bigquery;
class TableDataInsertAllResponse extends \Google\Collection
{
  protected $insertErrorsType = 'Google\Service\Bigquery\TableDataInsertAllResponseInsertErrors';
  protected $insertErrorsDataType = 'array';
  public $kind;

  public function setInsertErrors($insertErrors)
  {
    $this->insertErrors = $insertErrors;
  }

  public function getInsertErrors()
  {
    return $this->insertErrors;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
