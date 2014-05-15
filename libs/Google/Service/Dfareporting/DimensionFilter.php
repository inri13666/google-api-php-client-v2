<?php 
namespace Google\Service\Dfareporting;
class DimensionFilter extends \Google\Model
{
  public $dimensionName;
  public $kind;
  public $value;

  public function setDimensionName($dimensionName)
  {
    $this->dimensionName = $dimensionName;
  }

  public function getDimensionName()
  {
    return $this->dimensionName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
