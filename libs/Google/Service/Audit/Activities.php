<?php 
namespace Google\Service\Audit;
class Activities extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Audit\Activity';
  protected $itemsDataType = 'array';
  public $kind;
  public $next;

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

  public function setNext($next)
  {
    $this->next = $next;
  }

  public function getNext()
  {
    return $this->next;
  }
}
