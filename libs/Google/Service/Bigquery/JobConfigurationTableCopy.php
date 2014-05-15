<?php 
namespace Google\Service\Bigquery;
class JobConfigurationTableCopy extends \Google\Model
{
  public $createDisposition;
  protected $destinationTableType = 'Google\Service\Bigquery\TableReference';
  protected $destinationTableDataType = '';
  protected $sourceTableType = 'Google\Service\Bigquery\TableReference';
  protected $sourceTableDataType = '';
  public $writeDisposition;

  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }

  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }

  public function setDestinationTable(\Google\Service\Bigquery\TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }

  public function getDestinationTable()
  {
    return $this->destinationTable;
  }

  public function setSourceTable(\Google\Service\Bigquery\TableReference $sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }

  public function getSourceTable()
  {
    return $this->sourceTable;
  }

  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }

  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}
