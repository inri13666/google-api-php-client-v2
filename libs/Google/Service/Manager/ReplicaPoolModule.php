<?php 
namespace Google\Service\Manager;
class ReplicaPoolModule extends \Google\Collection
{
  protected $envVariablesType = 'Google\Service\Manager\EnvVariable';
  protected $envVariablesDataType = 'map';
  public $healthChecks;
  public $numReplicas;
  protected $replicaPoolParamsType = 'Google\Service\Manager\ReplicaPoolParams';
  protected $replicaPoolParamsDataType = '';
  public $resourceView;

  public function setEnvVariables($envVariables)
  {
    $this->envVariables = $envVariables;
  }

  public function getEnvVariables()
  {
    return $this->envVariables;
  }

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function setNumReplicas($numReplicas)
  {
    $this->numReplicas = $numReplicas;
  }

  public function getNumReplicas()
  {
    return $this->numReplicas;
  }

  public function setReplicaPoolParams(\Google\Service\Manager\ReplicaPoolParams $replicaPoolParams)
  {
    $this->replicaPoolParams = $replicaPoolParams;
  }

  public function getReplicaPoolParams()
  {
    return $this->replicaPoolParams;
  }

  public function setResourceView($resourceView)
  {
    $this->resourceView = $resourceView;
  }

  public function getResourceView()
  {
    return $this->resourceView;
  }
}
