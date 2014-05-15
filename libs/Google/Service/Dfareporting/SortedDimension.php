<?php 
namespace Google\Service\Dfareporting;
class SortedDimension extends \Google\Model
{
  public $kind;
  public $name;
  public $sortOrder;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }

  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}
