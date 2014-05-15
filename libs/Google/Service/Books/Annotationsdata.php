<?php 
namespace Google\Service\Books;
class Annotationsdata extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Books\Annotationdata';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
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
