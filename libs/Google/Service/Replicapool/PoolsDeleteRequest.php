<?php 
namespace Google\Service\Replicapool;
class PoolsDeleteRequest extends \Google\Collection
{
  public $abandonInstances;

  public function setAbandonInstances($abandonInstances)
  {
    $this->abandonInstances = $abandonInstances;
  }

  public function getAbandonInstances()
  {
    return $this->abandonInstances;
  }
}
