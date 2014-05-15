<?php 
namespace Google\Service\Bigquery;
class JobConfigurationLink extends \Google\Collection
{
  public $createDisposition;
  protected $destinationTableType = 'Google\Service\Bigquery\TableReference';
  protected $destinationTableDataType = '';
  public $sourceUri;
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

  public function setSourceUri($sourceUri)
  {
    $this->sourceUri = $sourceUri;
  }

  public function getSourceUri()
  {
    return $this->sourceUri;
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
