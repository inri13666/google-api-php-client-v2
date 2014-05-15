<?php 
namespace Google\Service\YouTube;
class I18nRegionListResponse extends \Google\Collection
{
  public $etag;
  public $eventId;
  protected $itemsType = 'Google\Service\YouTube\I18nRegion';
  protected $itemsDataType = 'array';
  public $kind;
  public $visitorId;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEventId($eventId)
  {
    $this->eventId = $eventId;
  }

  public function getEventId()
  {
    return $this->eventId;
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

  public function setVisitorId($visitorId)
  {
    $this->visitorId = $visitorId;
  }

  public function getVisitorId()
  {
    return $this->visitorId;
  }
}
