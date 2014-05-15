<?php 
namespace Google\Service\Reports;
class ActivityEvents extends \Google\Collection
{
  public $name;
  protected $parametersType = 'Google\Service\Reports\ActivityEventsParameters';
  protected $parametersDataType = 'array';
  public $type;

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

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
