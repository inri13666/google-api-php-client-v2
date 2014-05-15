<?php 
namespace Google\Service\Manager;
class ModuleStatus extends \Google\Model
{
  protected $autoscalingModuleStatusType = 'Google\Service\Manager\AutoscalingModuleStatus';
  protected $autoscalingModuleStatusDataType = '';
  protected $firewallModuleStatusType = 'Google\Service\Manager\FirewallModuleStatus';
  protected $firewallModuleStatusDataType = '';
  protected $healthCheckModuleStatusType = 'Google\Service\Manager\HealthCheckModuleStatus';
  protected $healthCheckModuleStatusDataType = '';
  protected $lbModuleStatusType = 'Google\Service\Manager\LbModuleStatus';
  protected $lbModuleStatusDataType = '';
  protected $networkModuleStatusType = 'Google\Service\Manager\NetworkModuleStatus';
  protected $networkModuleStatusDataType = '';
  protected $replicaPoolModuleStatusType = 'Google\Service\Manager\ReplicaPoolModuleStatus';
  protected $replicaPoolModuleStatusDataType = '';
  protected $stateType = 'Google\Service\Manager\DeployState';
  protected $stateDataType = '';
  public $type;

  public function setAutoscalingModuleStatus(\Google\Service\Manager\AutoscalingModuleStatus $autoscalingModuleStatus)
  {
    $this->autoscalingModuleStatus = $autoscalingModuleStatus;
  }

  public function getAutoscalingModuleStatus()
  {
    return $this->autoscalingModuleStatus;
  }

  public function setFirewallModuleStatus(\Google\Service\Manager\FirewallModuleStatus $firewallModuleStatus)
  {
    $this->firewallModuleStatus = $firewallModuleStatus;
  }

  public function getFirewallModuleStatus()
  {
    return $this->firewallModuleStatus;
  }

  public function setHealthCheckModuleStatus(\Google\Service\Manager\HealthCheckModuleStatus $healthCheckModuleStatus)
  {
    $this->healthCheckModuleStatus = $healthCheckModuleStatus;
  }

  public function getHealthCheckModuleStatus()
  {
    return $this->healthCheckModuleStatus;
  }

  public function setLbModuleStatus(\Google\Service\Manager\LbModuleStatus $lbModuleStatus)
  {
    $this->lbModuleStatus = $lbModuleStatus;
  }

  public function getLbModuleStatus()
  {
    return $this->lbModuleStatus;
  }

  public function setNetworkModuleStatus(\Google\Service\Manager\NetworkModuleStatus $networkModuleStatus)
  {
    $this->networkModuleStatus = $networkModuleStatus;
  }

  public function getNetworkModuleStatus()
  {
    return $this->networkModuleStatus;
  }

  public function setReplicaPoolModuleStatus(\Google\Service\Manager\ReplicaPoolModuleStatus $replicaPoolModuleStatus)
  {
    $this->replicaPoolModuleStatus = $replicaPoolModuleStatus;
  }

  public function getReplicaPoolModuleStatus()
  {
    return $this->replicaPoolModuleStatus;
  }

  public function setState(\Google\Service\Manager\DeployState $state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
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
