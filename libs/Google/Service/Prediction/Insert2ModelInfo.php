<?php 
namespace Google\Service\Prediction;
class Insert2ModelInfo extends \Google\Model
{
  public $classWeightedAccuracy;
  public $classificationAccuracy;
  public $meanSquaredError;
  public $modelType;
  public $numberInstances;
  public $numberLabels;

  public function setClassWeightedAccuracy($classWeightedAccuracy)
  {
    $this->classWeightedAccuracy = $classWeightedAccuracy;
  }

  public function getClassWeightedAccuracy()
  {
    return $this->classWeightedAccuracy;
  }

  public function setClassificationAccuracy($classificationAccuracy)
  {
    $this->classificationAccuracy = $classificationAccuracy;
  }

  public function getClassificationAccuracy()
  {
    return $this->classificationAccuracy;
  }

  public function setMeanSquaredError($meanSquaredError)
  {
    $this->meanSquaredError = $meanSquaredError;
  }

  public function getMeanSquaredError()
  {
    return $this->meanSquaredError;
  }

  public function setModelType($modelType)
  {
    $this->modelType = $modelType;
  }

  public function getModelType()
  {
    return $this->modelType;
  }

  public function setNumberInstances($numberInstances)
  {
    $this->numberInstances = $numberInstances;
  }

  public function getNumberInstances()
  {
    return $this->numberInstances;
  }

  public function setNumberLabels($numberLabels)
  {
    $this->numberLabels = $numberLabels;
  }

  public function getNumberLabels()
  {
    return $this->numberLabels;
  }
}
