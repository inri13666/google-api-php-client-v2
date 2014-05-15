<?php 
namespace Google\Service\Compute;
class Tags extends \Google\Collection
{
  public $fingerprint;
  public $items;

  public function setFingerprint($fingerprint)
  {
    $this->fingerprint = $fingerprint;
  }

  public function getFingerprint()
  {
    return $this->fingerprint;
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
