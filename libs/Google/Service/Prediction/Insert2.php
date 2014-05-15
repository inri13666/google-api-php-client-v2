<?php 
namespace Google\Service\Prediction;
class Insert2 extends \Google\Model
{
  public $created;
  public $id;
  public $kind;
  protected $modelInfoType = 'Google\Service\Prediction\Insert2ModelInfo';
  protected $modelInfoDataType = '';
  public $modelType;
  public $selfLink;
  public $storageDataLocation;
  public $storagePMMLLocation;
  public $storagePMMLModelLocation;
  public $trainingComplete;
  public $trainingStatus;

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
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

  public function setModelInfo(\Google\Service\Prediction\Insert2ModelInfo $modelInfo)
  {
    $this->modelInfo = $modelInfo;
  }

  public function getModelInfo()
  {
    return $this->modelInfo;
  }

  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }

  public function getModelType()
  {
    return $this->modelType;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
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

  public function setTrainingComplete($trainingComplete)
  {
    $this->trainingComplete = $trainingComplete;
  }

  public function getTrainingComplete()
  {
    return $this->trainingComplete;
  }

  public function setTrainingStatus($trainingStatus)
  {
    $this->trainingStatus = $trainingStatus;
  }

  public function getTrainingStatus()
  {
    return $this->trainingStatus;
  }
}
