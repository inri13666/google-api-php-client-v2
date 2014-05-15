<?php 
namespace Google\Service\YouTube;
class PropertyValue extends \Google\Model
{
  public $property;
  public $value;

  public function setProperty($property)
  {
    $this->property = $property;
  }

  public function getProperty()
  {
    return $this->property;
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
