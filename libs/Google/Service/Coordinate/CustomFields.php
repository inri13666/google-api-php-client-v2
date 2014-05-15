<?php 
namespace Google\Service\Coordinate;
class CustomFields extends \Google\Collection
{
  protected $customFieldType = 'Google\Service\Coordinate\CustomField';
  protected $customFieldDataType = 'array';
  public $kind;

  public function setCustomField($customField)
  {
    $this->customField = $customField;
  }

  public function getCustomField()
  {
    return $this->customField;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
