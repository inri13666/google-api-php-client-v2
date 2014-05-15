<?php 
namespace Google\Service\Replicapool;
class Tag extends \Google\Collection
{
  public $fingerPrint;
  public $items;

  public function setFingerPrint($fingerPrint)
  {
    $this->fingerPrint = $fingerPrint;
  }

  public function getFingerPrint()
  {
    return $this->fingerPrint;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }
}
