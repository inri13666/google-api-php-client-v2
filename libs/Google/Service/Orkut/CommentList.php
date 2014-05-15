<?php 
namespace Google\Service\Orkut;
class CommentList extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Orkut\Comment';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $previousPageToken;

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

  public function setPreviousPageToken($previousPageToken)
  {
    $this->previousPageToken = $previousPageToken;
  }

  public function getPreviousPageToken()
  {
    return $this->previousPageToken;
  }
}
