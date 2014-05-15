<?php 
namespace Google\Service\Calendar;
class FreeBusyRequest extends \Google\Collection
{
  public $calendarExpansionMax;
  public $groupExpansionMax;
  protected $itemsType = 'Google\Service\Calendar\FreeBusyRequestItem';
  protected $itemsDataType = 'array';
  public $timeMax;
  public $timeMin;
  public $timeZone;

  public function setCalendarExpansionMax($calendarExpansionMax)
  {
    $this->calendarExpansionMax = $calendarExpansionMax;
  }

  public function getCalendarExpansionMax()
  {
    return $this->calendarExpansionMax;
  }

  public function setGroupExpansionMax($groupExpansionMax)
  {
    $this->groupExpansionMax = $groupExpansionMax;
  }

  public function getGroupExpansionMax()
  {
    return $this->groupExpansionMax;
  }

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
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

  public function setTimeZone($timeZone)
  {
    $this->timeZone = $timeZone;
  }

  public function getTimeZone()
  {
    return $this->timeZone;
  }
}
