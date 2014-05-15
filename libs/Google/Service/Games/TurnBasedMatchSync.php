<?php 
namespace Google\Service\Games;
class TurnBasedMatchSync extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Games\TurnBasedMatch';
  protected $itemsDataType = 'array';
  public $kind;
  public $moreAvailable;
  public $nextPageToken;

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

  public function setMoreAvailable($moreAvailable)
  {
    $this->moreAvailable = $moreAvailable;
  }

  public function getMoreAvailable()
  {
    return $this->moreAvailable;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
