<?php 
namespace Google\Service\Coordinate;
class CustomField extends \Google\Model
{
  public $customFieldId;
  public $kind;
  public $value;

  public function setCustomFieldId($customFieldId)
  {
    $this->customFieldId = $customFieldId;
  }

  public function getCustomFieldId()
  {
    return $this->customFieldId;
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
