<?php 
namespace Google\Service\Orkut;
class CommunityPollList extends \Google\Collection
{
  public $firstPageToken;
  protected $itemsType = 'Google\Service\Orkut\CommunityPoll';
  protected $itemsDataType = 'array';
  public $kind;
  public $lastPageToken;
  public $nextPageToken;
  public $prevPageToken;

  public function setFirstPageToken($firstPageToken)
  {
    $this->firstPageToken = $firstPageToken;
  }

  public function getFirstPageToken()
  {
    return $this->firstPageToken;
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

  public function setLastPageToken($lastPageToken)
  {
    $this->lastPageToken = $lastPageToken;
  }

  public function getLastPageToken()
  {
    return $this->lastPageToken;
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
