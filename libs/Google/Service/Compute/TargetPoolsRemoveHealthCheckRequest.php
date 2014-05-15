<?php 
namespace Google\Service\Compute;
class TargetPoolsRemoveHealthCheckRequest extends \Google\Collection
{
  protected $healthChecksType = 'Google\Service\Compute\HealthCheckReference';
  protected $healthChecksDataType = 'array';

  public function setHealthChecks($healthChecks)
  {
    $this->healthChecks = $healthChecks;
  }

  public function getHealthChecks()
  {
    return $this->healthChecks;
  }
}
