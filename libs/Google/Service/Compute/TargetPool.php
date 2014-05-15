<?php 
namespace Google\Service\Compute;
class TargetPool extends \Google\Collection
{
  public $backupPool;
  public $creationTimestamp;
  public $description;
  public $failoverRatio;
  public $healthChecks;
  public $id;
  public $instances;
  public $kind;
  public $name;
  public $region;
  public $selfLink;
  public $sessionAffinity;

  public function setBackupPool($backupPool)
  {
    $this->backupPool = $backupPool;
  }

  public function getBackupPool()
  {
    return $this->backupPool;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setFailoverRatio($failoverRatio)
  {
    $this->failoverRatio = $failoverRatio;
  }

  public function getFailoverRatio()
  {
    return $this->failoverRatio;
  }

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }

  public function getInstances()
  {
    return $this->instances;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSessionAffinity($sessionAffinity)
  {
    $this->sessionAffinity = $sessionAffinity;
  }

  public function getSessionAffinity()
  {
    return $this->sessionAffinity;
  }
}
