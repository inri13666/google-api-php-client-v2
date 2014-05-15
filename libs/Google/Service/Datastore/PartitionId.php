<?php 
namespace Google\Service\Datastore;
class PartitionId extends \Google\Model
{
  public $datasetId;
  public $namespace;

  public function setDatasetId($datasetId)
  {
    $this->datasetId = $datasetId;
  }

  public function getDatasetId()
  {
    return $this->datasetId;
  }

  public function setNamespace($namespace)
  {
    $this->namespace = $namespace;
  }

  public function getNamespace()
  {
    return $this->namespace;
  }
}
