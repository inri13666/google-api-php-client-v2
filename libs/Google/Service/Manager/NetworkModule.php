<?php 
namespace Google\Service\Manager;
class NetworkModule extends \Google\Model
{
  public $iPv4Range;
  public $description;
  public $gatewayIPv4;

  public function setIPv4Range($iPv4Range)
  {
    $this->iPv4Range = $iPv4Range;
  }

  public function getIPv4Range()
  {
    return $this->iPv4Range;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setGatewayIPv4($gatewayIPv4)
  {
    $this->gatewayIPv4 = $gatewayIPv4;
  }

  public function getGatewayIPv4()
  {
    return $this->gatewayIPv4;
  }
}
