<?php 
namespace Google\Service\Bigquery;
class JobConfigurationExtract extends \Google\Collection
{
  public $destinationFormat;
  public $destinationUri;
  public $destinationUris;
  public $fieldDelimiter;
  public $printHeader;
  protected $sourceTableType = 'Google\Service\Bigquery\TableReference';
  protected $sourceTableDataType = '';

  public function setDestinationFormat($destinationFormat)
  {
    $this->destinationFormat = $destinationFormat;
  }

  public function getDestinationFormat()
  {
    return $this->destinationFormat;
  }

  public function setDestinationUri($destinationUri)
  {
    $this->destinationUri = $destinationUri;
  }

  public function getDestinationUri()
  {
    return $this->destinationUri;
  }

  public function setDestinationUris($destinationUris)
  {
    $this->destinationUris = $destinationUris;
  }

  public function getDestinationUris()
  {
    return $this->destinationUris;
  }

  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }

  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }

  public function setPrintHeader($printHeader)
  {
    $this->printHeader = $printHeader;
  }

  public function getPrintHeader()
  {
    return $this->printHeader;
  }

  public function setSourceTable(\Google\Service\Bigquery\TableReference $sourceTable)
  {
    $this->sourceTable = $sourceTable;
  }

  public function getSourceTable()
  {
    return $this->sourceTable;
  }
}
