<?php 
namespace Google\Service\Replicapool;
class Template extends \Google\Collection
{
  protected $actionType = 'Google\Service\Replicapool\Action';
  protected $actionDataType = '';
  protected $healthChecksType = 'Google\Service\Replicapool\HealthCheck';
  protected $healthChecksDataType = 'array';
  public $version;
  protected $vmParamsType = 'Google\Service\Replicapool\VmParams';
  protected $vmParamsDataType = '';

  public function setAction(\Google\Service\Replicapool\Action $action)
  {
    $this->action = $action;
  }

  public function getAction()
  {
    return $this->action;
  }

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }

  public function setVmParams(\Google\Service\Replicapool\VmParams $vmParams)
  {
    $this->vmParams = $vmParams;
  }

  public function getVmParams()
  {
    return $this->vmParams;
  }
}
