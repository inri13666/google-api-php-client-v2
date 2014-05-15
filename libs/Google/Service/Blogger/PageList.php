<?php 
namespace Google\Service\Blogger;
class PageList extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Blogger\Page';
  protected $itemsDataType = 'array';
  public $kind;

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
}
