<?php 
namespace Google\Service\Directory;
class VerificationCodes extends \Google\Collection
{
  public $etag;
  protected $itemsType = 'Google\Service\Directory\VerificationCode';
  protected $itemsDataType = 'array';
  public $kind;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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
