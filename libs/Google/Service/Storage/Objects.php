<?php 
namespace Google\Service\Storage;
class Objects extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Storage\StorageObject';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $prefixes;

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

  public function setPrefixes($prefixes)
  {
    $this->prefixes = $prefixes;
  }

  public function getPrefixes()
  {
    return $this->prefixes;
  }
}
