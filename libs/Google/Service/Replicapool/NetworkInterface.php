<?php 
namespace Google\Service\Replicapool;
class NetworkInterface extends \Google\Collection
{
  protected $accessConfigsType = 'Google\Service\Replicapool\AccessConfig';
  protected $accessConfigsDataType = 'array';
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
