<?php 
namespace Google\Service\Compute;
class NetworkInterface extends \Google\Collection
{
  protected $accessConfigsType = 'Google\Service\Compute\AccessConfig';
  protected $accessConfigsDataType = 'array';
  public $name;
  public $network;
  public $networkIP;

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

  public function setNetworkIP($networkIP)
  {
    $this->networkIP = $networkIP;
  }

  public function getNetworkIP()
  {
    return $this->networkIP;
  }
}
