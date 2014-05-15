<?php 
namespace Google\Service\Directory;
class UserPhone extends \Google\Model
{
  public $customType;
  public $primary;
  public $type;
  public $value;

  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }

  public function getCustomType()
  {
    return $this->customType;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
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
