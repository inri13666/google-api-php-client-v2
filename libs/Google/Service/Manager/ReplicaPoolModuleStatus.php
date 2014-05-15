<?php 
namespace Google\Service\Manager;
class ReplicaPoolModuleStatus extends \Google\Model
{
  public $replicaPoolUrl;
  public $resourceViewUrl;

  public function setReplicaPoolUrl($replicaPoolUrl)
  {
    $this->replicaPoolUrl = $replicaPoolUrl;
  }

  public function getReplicaPoolUrl()
  {
    return $this->replicaPoolUrl;
  }

  public function setResourceViewUrl($resourceViewUrl)
  {
    $this->resourceViewUrl = $resourceViewUrl;
  }

  public function getResourceViewUrl()
  {
    return $this->resourceViewUrl;
  }
}
