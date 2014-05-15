<?php 
namespace Google\Service\Compute;
class Metadata extends \Google\Collection
{
  public $fingerprint;
  protected $itemsType = 'Google\Service\Compute\MetadataItems';
  protected $itemsDataType = 'array';
  public $kind;

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

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
