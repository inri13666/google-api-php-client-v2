<?php 
namespace Google\Service\SQLAdmin;
class Flag extends \Google\Collection
{
  public $allowedStringValues;
  public $appliesTo;
  public $kind;
  public $maxValue;
  public $minValue;
  public $name;
  public $type;

  public function setAllowedStringValues($allowedStringValues)
  {
    $this->allowedStringValues = $allowedStringValues;
  }

  public function getAllowedStringValues()
  {
    return $this->allowedStringValues;
  }

  public function setAppliesTo($appliesTo)
  {
    $this->appliesTo = $appliesTo;
  }

  public function getAppliesTo()
  {
    return $this->appliesTo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }

  public function getMaxValue()
  {
    return $this->maxValue;
  }

  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }

  public function getMinValue()
  {
    return $this->minValue;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
