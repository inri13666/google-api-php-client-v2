<?php 
namespace Google\Service\Analytics;
class GoalEventDetails extends \Google\Collection
{
  protected $eventConditionsType = 'Google\Service\Analytics\GoalEventDetailsEventConditions';
  protected $eventConditionsDataType = 'array';
  public $useEventValue;

  public function setEventConditions($eventConditions)
  {
    $this->eventConditions = $eventConditions;
  }

  public function getEventConditions()
  {
    return $this->eventConditions;
  }

  public function setUseEventValue($useEventValue)
  {
    $this->useEventValue = $useEventValue;
  }

  public function getUseEventValue()
  {
    return $this->useEventValue;
  }
}
