<?php 
namespace Google\Service\Prediction;
class Insert extends \Google\Collection
{
  public $id;
  public $modelType;
  public $sourceModel;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  protected $trainingInstancesType = 'Google\Service\Prediction\InsertTrainingInstances';
  protected $trainingInstancesDataType = 'array';
  public $utility;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }

  public function getModelType()
  {
    return $this->modelType;
  }

  public function setSourceModel($sourceModel)
  {
    $this->sourceModel = $sourceModel;
  }

  public function getSourceModel()
  {
    return $this->sourceModel;
  }

  public function setStorageDataLocation($storageDataLocation)
  {
    $this->storageDataLocation = $storageDataLocation;
  }

  public function getStorageDataLocation()
  {
    return $this->storageDataLocation;
  }

  public function setStoragePMMLLocation($storagePMMLLocation)
  {
    $this->storagePMMLLocation = $storagePMMLLocation;
  }

  public function getStoragePMMLLocation()
  {
    return $this->storagePMMLLocation;
  }

  public function setStoragePMMLModelLocation($storagePMMLModelLocation)
  {
    $this->storagePMMLModelLocation = $storagePMMLModelLocation;
  }

  public function getStoragePMMLModelLocation()
  {
    return $this->storagePMMLModelLocation;
  }

  public function setTrainingInstances($trainingInstances)
  {
    $this->trainingInstances = $trainingInstances;
  }

  public function getTrainingInstances()
  {
    return $this->trainingInstances;
  }

  public function setUtility($utility)
  {
    $this->utility = $utility;
  }

  public function getUtility()
  {
    return $this->utility;
  }
}
