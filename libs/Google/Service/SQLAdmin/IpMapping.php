<?php 
namespace Google\Service\SQLAdmin;
class IpMapping extends \Google\Model
{
  public $ipAddress;
  public $timeToRetire;

  public function setIpAddress($ipAddress)
  {
    $this->ipAddress = $ipAddress;
  }

  public function getIpAddress()
  {
    return $this->ipAddress;
  }

  public function setTimeToRetire($timeToRetire)
  {
    $this->timeToRetire = $timeToRetire;
  }

  public function getTimeToRetire()
  {
    return $this->timeToRetire;
  }
}
