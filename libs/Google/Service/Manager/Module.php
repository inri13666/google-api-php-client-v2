<?php 
namespace Google\Service\Manager;
class Module extends \Google\Model
{
  protected $autoscalingModuleType = 'Google\Service\Manager\AutoscalingModule';
  protected $autoscalingModuleDataType = '';
  protected $firewallModuleType = 'Google\Service\Manager\FirewallModule';
  protected $firewallModuleDataType = '';
  protected $healthCheckModuleType = 'Google\Service\Manager\HealthCheckModule';
  protected $healthCheckModuleDataType = '';
  protected $lbModuleType = 'Google\Service\Manager\LbModule';
  protected $lbModuleDataType = '';
  protected $networkModuleType = 'Google\Service\Manager\NetworkModule';
  protected $networkModuleDataType = '';
  protected $replicaPoolModuleType = 'Google\Service\Manager\ReplicaPoolModule';
  protected $replicaPoolModuleDataType = '';
  public $type;

  public function setAutoscalingModule(\Google\Service\Manager\AutoscalingModule $autoscalingModule)
  {
    $this->autoscalingModule = $autoscalingModule;
  }

  public function getAutoscalingModule()
  {
    return $this->autoscalingModule;
  }

  public function setFirewallModule(\Google\Service\Manager\FirewallModule $firewallModule)
  {
    $this->firewallModule = $firewallModule;
  }

  public function getFirewallModule()
  {
    return $this->firewallModule;
  }

  public function setHealthCheckModule(\Google\Service\Manager\HealthCheckModule $healthCheckModule)
  {
    $this->healthCheckModule = $healthCheckModule;
  }

  public function getHealthCheckModule()
  {
    return $this->healthCheckModule;
  }

  public function setLbModule(\Google\Service\Manager\LbModule $lbModule)
  {
    $this->lbModule = $lbModule;
  }

  public function getLbModule()
  {
    return $this->lbModule;
  }

  public function setNetworkModule(\Google\Service\Manager\NetworkModule $networkModule)
  {
    $this->networkModule = $networkModule;
  }

  public function getNetworkModule()
  {
    return $this->networkModule;
  }

  public function setReplicaPoolModule(\Google\Service\Manager\ReplicaPoolModule $replicaPoolModule)
  {
    $this->replicaPoolModule = $replicaPoolModule;
  }

  public function getReplicaPoolModule()
  {
    return $this->replicaPoolModule;
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
