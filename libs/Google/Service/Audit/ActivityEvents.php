<?php 
namespace Google\Service\Audit;
class ActivityEvents extends \Google\Collection
{
  public $eventType;
  public $name;
  protected $parametersType = 'Google\Service\Audit\ActivityEventsParameters';
  protected $parametersDataType = 'array';

  public function setEventType($eventType)
  {
    $this->eventType = $eventType;
  }

  public function getEventType()
  {
    return $this->eventType;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setParameters($parameters)
  {
    $this->parameters = $parameters;
  }

  public function getParameters()
  {
    return $this->parameters;
  }
}
