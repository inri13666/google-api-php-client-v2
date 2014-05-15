<?php 
namespace Google\Service\Books;
class Layersummaries extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Books\Layersummary';
  protected $itemsDataType = 'array';
  public $kind;
  public $totalItems;

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

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
