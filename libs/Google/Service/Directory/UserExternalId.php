<?php 
namespace Google\Service\Directory;
class UserExternalId extends \Google\Model
{
  public $customType;
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
