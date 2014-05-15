<?php 
namespace Google\Service\Replicapool;
class Pool extends \Google\Collection
{
  public $autoRestart;
  public $baseInstanceName;
  public $currentNumReplicas;
  public $description;
  protected $healthChecksType = 'Google\Service\Replicapool\HealthCheck';
  protected $healthChecksDataType = 'array';
  public $initialNumReplicas;
  protected $labelsType = 'Google\Service\Replicapool\Label';
  protected $labelsDataType = 'array';
  public $name;
  public $numReplicas;
  public $resourceViews;
  public $selfLink;
  public $targetPool;
  public $targetPools;
  protected $templateType = 'Google\Service\Replicapool\Template';
  protected $templateDataType = '';
  public $type;

  public function setAutoRestart($autoRestart)
  {
    $this->autoRestart = $autoRestart;
  }

  public function getAutoRestart()
  {
    return $this->autoRestart;
  }

  public function setBaseInstanceName($baseInstanceName)
  {
    $this->baseInstanceName = $baseInstanceName;
  }

  public function getBaseInstanceName()
  {
    return $this->baseInstanceName;
  }

  public function setCurrentNumReplicas($currentNumReplicas)
  {
    $this->currentNumReplicas = $currentNumReplicas;
  }

  public function getCurrentNumReplicas()
  {
    return $this->currentNumReplicas;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function setInitialNumReplicas($initialNumReplicas)
  {
    $this->initialNumReplicas = $initialNumReplicas;
  }

  public function getInitialNumReplicas()
  {
    return $this->initialNumReplicas;
  }

  public function setLabels($labels)
  {
    $this->labels = $labels;
  }

  public function getLabels()
  {
    return $this->labels;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNumReplicas($numReplicas)
  {
    $this->numReplicas = $numReplicas;
  }

  public function getNumReplicas()
  {
    return $this->numReplicas;
  }

  public function setResourceViews($resourceViews)
  {
    $this->resourceViews = $resourceViews;
  }

  public function getResourceViews()
  {
    return $this->resourceViews;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTargetPool($targetPool)
  {
    $this->targetPool = $targetPool;
  }

  public function getTargetPool()
  {
    return $this->targetPool;
  }

  public function setTargetPools($targetPools)
  {
    $this->targetPools = $targetPools;
  }

  public function getTargetPools()
  {
    return $this->targetPools;
  }

  public function setTemplate(\Google\Service\Replicapool\Template $template)
  {
    $this->template = $template;
  }

  public function getTemplate()
  {
    return $this->template;
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
