<?php 
namespace Google\Service\Prediction;
class Output extends \Google\Collection
{
  public $id;
  public $kind;
  public $outputLabel;
  protected $outputMultiType = 'Google\Service\Prediction\OutputOutputMulti';
  protected $outputMultiDataType = 'array';
  public $outputValue;
  public $selfLink;

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

  public function setOutputLabel($outputLabel)
  {
    $this->outputLabel = $outputLabel;
  }

  public function getOutputLabel()
  {
    return $this->outputLabel;
  }

  public function setOutputMulti($outputMulti)
  {
    $this->outputMulti = $outputMulti;
  }

  public function getOutputMulti()
  {
    return $this->outputMulti;
  }

  public function setOutputValue($outputValue)
  {
    $this->outputValue = $outputValue;
  }

  public function getOutputValue()
  {
    return $this->outputValue;
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
