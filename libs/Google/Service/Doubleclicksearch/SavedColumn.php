<?php 
namespace Google\Service\Doubleclicksearch;
class SavedColumn extends \Google\Model
{
  public $kind;
  public $savedColumnName;
  public $type;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSavedColumnName($savedColumnName)
  {
    $this->savedColumnName = $savedColumnName;
  }

  public function getSavedColumnName()
  {
    return $this->savedColumnName;
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
