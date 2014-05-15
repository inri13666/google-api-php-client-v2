<?php 
namespace Google\Service\Blogger;
class CommentList extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Blogger\Comment';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $prevPageToken;

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

  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
}
