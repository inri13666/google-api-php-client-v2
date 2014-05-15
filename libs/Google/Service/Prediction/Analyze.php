<?php 
namespace Google\Service\Prediction;
class Analyze extends \Google\Collection
{
  protected $dataDescriptionType = 'Google\Service\Prediction\AnalyzeDataDescription';
  protected $dataDescriptionDataType = '';
  public $errors;
  public $id;
  public $kind;
  protected $modelDescriptionType = 'Google\Service\Prediction\AnalyzeModelDescription';
  protected $modelDescriptionDataType = '';
  public $selfLink;

  public function setDataDescription(\Google\Service\Prediction\AnalyzeDataDescription $dataDescription)
  {
    $this->dataDescription = $dataDescription;
  }

  public function getDataDescription()
  {
    return $this->dataDescription;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
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

  public function setModelDescription(\Google\Service\Prediction\AnalyzeModelDescription $modelDescription)
  {
    $this->modelDescription = $modelDescription;
  }

  public function getModelDescription()
  {
    return $this->modelDescription;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
