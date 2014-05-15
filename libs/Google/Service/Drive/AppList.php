<?php 
namespace Google\Service\Drive;
class AppList extends \Google\Collection
{
  public $defaultAppIds;
  public $etag;
  protected $itemsType = 'Google\Service\Drive\App';
  protected $itemsDataType = 'array';
  public $kind;
  public $selfLink;

  public function setDefaultAppIds($defaultAppIds)
  {
    $this->defaultAppIds = $defaultAppIds;
  }

  public function getDefaultAppIds()
  {
    return $this->defaultAppIds;
  }

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

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
