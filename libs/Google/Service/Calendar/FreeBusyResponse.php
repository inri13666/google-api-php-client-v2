<?php 
namespace Google\Service\Calendar;
class FreeBusyResponse extends \Google\Model
{
  protected $calendarsType = 'Google\Service\Calendar\FreeBusyCalendar';
  protected $calendarsDataType = 'map';
  protected $groupsType = 'Google\Service\Calendar\FreeBusyGroup';
  protected $groupsDataType = 'map';
  public $kind;
  public $timeMax;
  public $timeMin;

  public function setCalendars($calendars)
  {
    $this->calendars = $calendars;
  }

  public function getCalendars()
  {
    return $this->calendars;
  }

  public function setGroups($groups)
  {
    $this->groups = $groups;
  }

  public function getGroups()
  {
    return $this->groups;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTimeMax($timeMax)
  {
    $this->timeMax = $timeMax;
  }

  public function getTimeMax()
  {
    return $this->timeMax;
  }

  public function setTimeMin($timeMin)
  {
    $this->timeMin = $timeMin;
  }

  public function getTimeMin()
  {
    return $this->timeMin;
  }
}
