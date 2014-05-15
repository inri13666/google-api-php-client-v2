<?php 
namespace Google\Service\Calendar;
class Events extends \Google\Collection
{
  public $accessRole;
  protected $defaultRemindersType = 'Google\Service\Calendar\EventReminder';
  protected $defaultRemindersDataType = 'array';
  public $description;
  public $etag;
  protected $itemsType = 'Google\Service\Calendar\Event';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $nextSyncToken;
  public $summary;
  public $timeZone;
  public $updated;

  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }

  public function getAccessRole()
  {
    return $this->accessRole;
  }

  public function setDefaultReminders($defaultReminders)
  {
    $this->defaultReminders = $defaultReminders;
  }

  public function getDefaultReminders()
  {
    return $this->defaultReminders;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNextSyncToken($nextSyncToken)
  {
    $this->nextSyncToken = $nextSyncToken;
  }

  public function getNextSyncToken()
  {
    return $this->nextSyncToken;
  }

  public function setSummary($summary)
  {
    $this->summary = $summary;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
