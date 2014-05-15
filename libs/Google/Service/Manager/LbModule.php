<?php 
namespace Google\Service\Manager;
class LbModule extends \Google\Collection
{
  public $description;
  public $healthChecks;
  public $ipAddress;
  public $ipProtocol;
  public $portRange;
  public $targetModules;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }

  public function getIpAddress()
  {
    return $this->ipAddress;
  }

  public function setIpProtocol($ipProtocol)
  {
    $this->ipProtocol = $ipProtocol;
  }

  public function getIpProtocol()
  {
    return $this->ipProtocol;
  }

  public function setPortRange($portRange)
  {
    $this->portRange = $portRange;
  }

  public function getPortRange()
  {
    return $this->portRange;
  }

  public function setTargetModules($targetModules)
  {
    $this->targetModules = $targetModules;
  }

  public function getTargetModules()
  {
    return $this->targetModules;
  }
}
