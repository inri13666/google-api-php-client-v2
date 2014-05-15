<?php 
namespace Google\Service\Spectrum;
class AntennaCharacteristics extends \Google\Model
{
  public $height;
  public $heightType;
  public $heightUncertainty;

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setHeightType($heightType)
  {
    $this->heightType = $heightType;
  }

  public function getHeightType()
  {
    return $this->heightType;
  }

  public function setHeightUncertainty($heightUncertainty)
  {
    $this->heightUncertainty = $heightUncertainty;
  }

  public function getHeightUncertainty()
  {
    return $this->heightUncertainty;
  }
}
