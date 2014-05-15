<?php 
namespace Google\Service\Manager;
class NetworkInterface extends \Google\Collection
{
  protected $accessConfigsType = 'Google\Service\Manager\AccessConfig';
  protected $accessConfigsDataType = 'array';
  public $name;
  public $network;
  public $networkIp;

  public function setAccessConfigs($accessConfigs)
  {
    $this->accessConfigs = $accessConfigs;
  }

  public function getAccessConfigs()
  {
    return $this->accessConfigs;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setNetworkIp($networkIp)
  {
    $this->networkIp = $networkIp;
  }

  public function getNetworkIp()
  {
    return $this->networkIp;
  }
}
