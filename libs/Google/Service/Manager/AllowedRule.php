<?php 
namespace Google\Service\Manager;
class AllowedRule extends \Google\Collection
{
  public $iPProtocol;
  public $ports;

  public function setIPProtocol($iPProtocol)
  {
    $this->iPProtocol = $iPProtocol;
  }

  public function getIPProtocol()
  {
    return $this->iPProtocol;
  }

  public function setPorts($ports)
  {
    $this->ports = $ports;
  }

  public function getPorts()
  {
    return $this->ports;
  }
}
