<?php 
namespace Google\Service\Plus;
class Acl extends \Google\Collection
{
  public $description;
  protected $itemsType = 'Google\Service\Plus\PlusAclentryResource';
  protected $itemsDataType = 'array';
  public $kind;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
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
