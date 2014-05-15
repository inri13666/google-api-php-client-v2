<?php 
namespace Google\Service\Compute;
class ZoneMaintenanceWindows extends \Google\Model
{
  public $beginTime;
  public $description;
  public $endTime;
  public $name;

  public function setBeginTime($beginTime)
  {
    $this->beginTime = $beginTime;
  }

  public function getBeginTime()
  {
    return $this->beginTime;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
