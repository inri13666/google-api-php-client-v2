<?php 
namespace Google\Service\Bigquery;
class DatasetListDatasets extends \Google\Model
{
  protected $datasetReferenceType = 'Google\Service\Bigquery\DatasetReference';
  protected $datasetReferenceDataType = '';
  public $friendlyName;
  public $id;
  public $kind;

  public function setDatasetReference(\Google\Service\Bigquery\DatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }

  public function getDatasetReference()
  {
    return $this->datasetReference;
  }

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
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
