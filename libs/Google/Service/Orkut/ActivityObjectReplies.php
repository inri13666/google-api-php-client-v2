<?php 
namespace Google\Service\Orkut;
class ActivityObjectReplies extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Orkut\Comment';
  protected $itemsDataType = 'array';
  public $totalItems;
  public $url;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
