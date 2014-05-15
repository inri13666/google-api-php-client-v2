<?php 
namespace Google\Service\Compute;
class HealthStatus extends \Google\Model
{
  public $healthState;
  public $instance;
  public $ipAddress;

  public function setHealthState($healthState)
  {
    $this->healthState = $healthState;
  }

  public function getHealthState()
  {
    return $this->healthState;
  }

  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getInstance()
  {
    return $this->instance;
  }

  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }

  public function getIpAddress()
  {
    return $this->ipAddress;
  }
}
