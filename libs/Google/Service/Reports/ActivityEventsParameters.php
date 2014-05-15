<?php 
namespace Google\Service\Reports;
class ActivityEventsParameters extends \Google\Model
{
  public $boolValue;
  public $intValue;
  public $name;
  public $value;

  public function setBoolValue($boolValue)
  {
    $this->boolValue = $boolValue;
  }

  public function getBoolValue()
  {
    return $this->boolValue;
  }

  public function setIntValue($intValue)
  {
    $this->intValue = $intValue;
  }

  public function getIntValue()
  {
    return $this->intValue;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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
