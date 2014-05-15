<?php 
namespace Google\Service\Calendar;
class CalendarListEntry extends \Google\Collection
{
  public $accessRole;
  public $backgroundColor;
  public $colorId;
  protected $defaultRemindersType = 'Google\Service\Calendar\EventReminder';
  protected $defaultRemindersDataType = 'array';
  public $deleted;
  public $description;
  public $etag;
  public $foregroundColor;
  public $hidden;
  public $id;
  public $kind;
  public $location;
  protected $notificationSettingsType = 'Google\Service\Calendar\CalendarListEntryNotificationSettings';
  protected $notificationSettingsDataType = '';
  public $primary;
  public $selected;
  public $summary;
  public $summaryOverride;
  public $timeZone;

  public function setAccessRole($accessRole)
  {
    $this->accessRole = $accessRole;
  }

  public function getAccessRole()
  {
    return $this->accessRole;
  }

  public function setBackgroundColor($backgroundColor)
  {
    $this->backgroundColor = $backgroundColor;
  }

  public function getBackgroundColor()
  {
    return $this->backgroundColor;
  }

  public function setColorId($colorId)
  {
    $this->colorId = $colorId;
  }

  public function getColorId()
  {
    return $this->colorId;
  }

  public function setDefaultReminders($defaultReminders)
  {
    $this->defaultReminders = $defaultReminders;
  }

  public function getDefaultReminders()
  {
    return $this->defaultReminders;
  }

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getDeleted()
  {
    return $this->deleted;
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

  public function setForegroundColor($foregroundColor)
  {
    $this->foregroundColor = $foregroundColor;
  }

  public function getForegroundColor()
  {
    return $this->foregroundColor;
  }

  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }

  public function getHidden()
  {
    return $this->hidden;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setNotificationSettings(\Google\Service\Calendar\CalendarListEntryNotificationSettings $notificationSettings)
  {
    $this->notificationSettings = $notificationSettings;
  }

  public function getNotificationSettings()
  {
    return $this->notificationSettings;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setSelected($selected)
  {
    $this->selected = $selected;
  }

  public function getSelected()
  {
    return $this->selected;
  }

  public function setSummary($summary)
  {
    $this->summary = $summary;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function setSummaryOverride($summaryOverride)
  {
    $this->summaryOverride = $summaryOverride;
  }

  public function getSummaryOverride()
  {
    return $this->summaryOverride;
  }

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }
}
