<?php 
namespace Google\Service\Compute;
class HealthCheckReference extends \Google\Model
{
  public $healthCheck;

  public function setHealthCheck($healthCheck)
  {
    $this->healthCheck = $healthCheck;
  }

  public function getHealthCheck()
  {
    return $this->healthCheck;
  }
}
