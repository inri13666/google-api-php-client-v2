<?php 
namespace Google\Service\Directory;
class Notifications extends \Google\Collection
{
  public $etag;
  protected $itemsType = 'Google\Service\Directory\Notification';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $unreadNotificationsCount;

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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setUnreadNotificationsCount($unreadNotificationsCount)
  {
    $this->unreadNotificationsCount = $unreadNotificationsCount;
  }

  public function getUnreadNotificationsCount()
  {
    return $this->unreadNotificationsCount;
  }
}
