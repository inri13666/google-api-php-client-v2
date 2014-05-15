<?php 
namespace Google\Service\AppState;
class ListResponse extends \Google\Collection
{
  protected $itemsType = 'Google\Service\AppState\GetResponse';
  protected $itemsDataType = 'array';
  public $kind;
  public $maximumKeyCount;

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

  public function setMaximumKeyCount($maximumKeyCount)
  {
    $this->maximumKeyCount = $maximumKeyCount;
  }

  public function getMaximumKeyCount()
  {
    return $this->maximumKeyCount;
  }
}
