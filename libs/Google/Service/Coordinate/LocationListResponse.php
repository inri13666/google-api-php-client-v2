<?php 
namespace Google\Service\Coordinate;
class LocationListResponse extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Coordinate\LocationRecord';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $tokenPaginationType = 'Google\Service\Coordinate\TokenPagination';
  protected $tokenPaginationDataType = '';

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

  public function setTokenPagination(\Google\Service\Coordinate\TokenPagination $tokenPagination)
  {
    $this->tokenPagination = $tokenPagination;
  }

  public function getTokenPagination()
  {
    return $this->tokenPagination;
  }
}
