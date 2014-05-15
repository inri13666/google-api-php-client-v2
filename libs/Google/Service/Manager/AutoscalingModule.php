<?php 
namespace Google\Service\Manager;
class AutoscalingModule extends \Google\Model
{
  public $coolDownPeriodSec;
  public $description;
  public $maxNumReplicas;
  public $minNumReplicas;
  public $signalType;
  public $targetModule;
  public $targetUtilization;

  public function setCoolDownPeriodSec($coolDownPeriodSec)
  {
    $this->coolDownPeriodSec = $coolDownPeriodSec;
  }

  public function getCoolDownPeriodSec()
  {
    return $this->coolDownPeriodSec;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setMaxNumReplicas($maxNumReplicas)
  {
    $this->maxNumReplicas = $maxNumReplicas;
  }

  public function getMaxNumReplicas()
  {
    return $this->maxNumReplicas;
  }

  public function setMinNumReplicas($minNumReplicas)
  {
    $this->minNumReplicas = $minNumReplicas;
  }

  public function getMinNumReplicas()
  {
    return $this->minNumReplicas;
  }

  public function setSignalType($signalType)
  {
    $this->signalType = $signalType;
  }

  public function getSignalType()
  {
    return $this->signalType;
  }

  public function setTargetModule($targetModule)
  {
    $this->targetModule = $targetModule;
  }

  public function getTargetModule()
  {
    return $this->targetModule;
  }

  public function setTargetUtilization($targetUtilization)
  {
    $this->targetUtilization = $targetUtilization;
  }

  public function getTargetUtilization()
  {
    return $this->targetUtilization;
  }
}
