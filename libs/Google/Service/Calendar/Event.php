<?php 
namespace Google\Service\Calendar;
class Event extends \Google\Collection
{
  public $anyoneCanAddSelf;
  protected $attendeesType = 'Google\Service\Calendar\EventAttendee';
  protected $attendeesDataType = 'array';
  public $attendeesOmitted;
  public $colorId;
  public $created;
  protected $creatorType = 'Google\Service\Calendar\EventCreator';
  protected $creatorDataType = '';
  public $description;
  protected $endType = 'Google\Service\Calendar\EventDateTime';
  protected $endDataType = '';
  public $endTimeUnspecified;
  public $etag;
  protected $extendedPropertiesType = 'Google\Service\Calendar\EventExtendedProperties';
  protected $extendedPropertiesDataType = '';
  protected $gadgetType = 'Google\Service\Calendar\EventGadget';
  protected $gadgetDataType = '';
  public $guestsCanInviteOthers;
  public $guestsCanModify;
  public $guestsCanSeeOtherGuests;
  public $hangoutLink;
  public $htmlLink;
  public $iCalUID;
  public $id;
  public $kind;
  public $location;
  public $locked;
  protected $organizerType = 'Google\Service\Calendar\EventOrganizer';
  protected $organizerDataType = '';
  protected $originalStartTimeType = 'Google\Service\Calendar\EventDateTime';
  protected $originalStartTimeDataType = '';
  public $privateCopy;
  public $recurrence;
  public $recurringEventId;
  protected $remindersType = 'Google\Service\Calendar\EventReminders';
  protected $remindersDataType = '';
  public $sequence;
  protected $sourceType = 'Google\Service\Calendar\EventSource';
  protected $sourceDataType = '';
  protected $startType = 'Google\Service\Calendar\EventDateTime';
  protected $startDataType = '';
  public $status;
  public $summary;
  public $transparency;
  public $updated;
  public $visibility;

  public function setAnyoneCanAddSelf($anyoneCanAddSelf)
  {
    $this->anyoneCanAddSelf = $anyoneCanAddSelf;
  }

  public function getAnyoneCanAddSelf()
  {
    return $this->anyoneCanAddSelf;
  }

  public function setAttendees($attendees)
  {
    $this->attendees = $attendees;
  }

  public function getAttendees()
  {
    return $this->attendees;
  }

  public function setAttendeesOmitted($attendeesOmitted)
  {
    $this->attendeesOmitted = $attendeesOmitted;
  }

  public function getAttendeesOmitted()
  {
    return $this->attendeesOmitted;
  }

  public function setColorId($colorId)
  {
    $this->colorId = $colorId;
  }

  public function getColorId()
  {
    return $this->colorId;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCreator(\Google\Service\Calendar\EventCreator $creator)
  {
    $this->creator = $creator;
  }

  public function getCreator()
  {
    return $this->creator;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEnd(\Google\Service\Calendar\EventDateTime $end)
  {
    $this->end = $end;
  }

  public function getEnd()
  {
    return $this->end;
  }

  public function setEndTimeUnspecified($endTimeUnspecified)
  {
    $this->endTimeUnspecified = $endTimeUnspecified;
  }

  public function getEndTimeUnspecified()
  {
    return $this->endTimeUnspecified;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExtendedProperties(\Google\Service\Calendar\EventExtendedProperties $extendedProperties)
  {
    $this->extendedProperties = $extendedProperties;
  }

  public function getExtendedProperties()
  {
    return $this->extendedProperties;
  }

  public function setGadget(\Google\Service\Calendar\EventGadget $gadget)
  {
    $this->gadget = $gadget;
  }

  public function getGadget()
  {
    return $this->gadget;
  }

  public function setGuestsCanInviteOthers($guestsCanInviteOthers)
  {
    $this->guestsCanInviteOthers = $guestsCanInviteOthers;
  }

  public function getGuestsCanInviteOthers()
  {
    return $this->guestsCanInviteOthers;
  }

  public function setGuestsCanModify($guestsCanModify)
  {
    $this->guestsCanModify = $guestsCanModify;
  }

  public function getGuestsCanModify()
  {
    return $this->guestsCanModify;
  }

  public function setGuestsCanSeeOtherGuests($guestsCanSeeOtherGuests)
  {
    $this->guestsCanSeeOtherGuests = $guestsCanSeeOtherGuests;
  }

  public function getGuestsCanSeeOtherGuests()
  {
    return $this->guestsCanSeeOtherGuests;
  }

  public function setHangoutLink($hangoutLink)
  {
    $this->hangoutLink = $hangoutLink;
  }

  public function getHangoutLink()
  {
    return $this->hangoutLink;
  }

  public function setHtmlLink($htmlLink)
  {
    $this->htmlLink = $htmlLink;
  }

  public function getHtmlLink()
  {
    return $this->htmlLink;
  }

  public function setICalUID($iCalUID)
  {
    $this->iCalUID = $iCalUID;
  }

  public function getICalUID()
  {
    return $this->iCalUID;
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

  public function setLocked($locked)
  {
    $this->locked = $locked;
  }

  public function getLocked()
  {
    return $this->locked;
  }

  public function setOrganizer(\Google\Service\Calendar\EventOrganizer $organizer)
  {
    $this->organizer = $organizer;
  }

  public function getOrganizer()
  {
    return $this->organizer;
  }

  public function setOriginalStartTime(\Google\Service\Calendar\EventDateTime $originalStartTime)
  {
    $this->originalStartTime = $originalStartTime;
  }

  public function getOriginalStartTime()
  {
    return $this->originalStartTime;
  }

  public function setPrivateCopy($privateCopy)
  {
    $this->privateCopy = $privateCopy;
  }

  public function getPrivateCopy()
  {
    return $this->privateCopy;
  }

  public function setRecurrence($recurrence)
  {
    $this->recurrence = $recurrence;
  }

  public function getRecurrence()
  {
    return $this->recurrence;
  }

  public function setRecurringEventId($recurringEventId)
  {
    $this->recurringEventId = $recurringEventId;
  }

  public function getRecurringEventId()
  {
    return $this->recurringEventId;
  }

  public function setReminders(\Google\Service\Calendar\EventReminders $reminders)
  {
    $this->reminders = $reminders;
  }

  public function getReminders()
  {
    return $this->reminders;
  }

  public function setSequence($sequence)
  {
    $this->sequence = $sequence;
  }

  public function getSequence()
  {
    return $this->sequence;
  }

  public function setSource(\Google\Service\Calendar\EventSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setStart(\Google\Service\Calendar\EventDateTime $start)
  {
    $this->start = $start;
  }

  public function getStart()
  {
    return $this->start;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setSummary($summary)
  {
    $this->summary = $summary;
  }

  public function getSummary()
  {
    return $this->summary;
  }

  public function setTransparency($transparency)
  {
    $this->transparency = $transparency;
  }

  public function getTransparency()
  {
    return $this->transparency;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setVisibility($visibility)
  {
    $this->visibility = $visibility;
  }

  public function getVisibility()
  {
    return $this->visibility;
  }
}
