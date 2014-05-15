<?php 
namespace Google\Service\Compute;
class Scheduling extends \Google\Model
{
  public $automaticRestart;
  public $onHostMaintenance;

  public function setAutomaticRestart($automaticRestart)
  {
    $this->automaticRestart = $automaticRestart;
  }

  public function getAutomaticRestart()
  {
    return $this->automaticRestart;
  }

  public function setOnHostMaintenance($onHostMaintenance)
  {
    $this->onHostMaintenance = $onHostMaintenance;
  }

  public function getOnHostMaintenance()
  {
    return $this->onHostMaintenance;
  }
}
