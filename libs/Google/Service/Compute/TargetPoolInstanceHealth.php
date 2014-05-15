<?php 
namespace Google\Service\Compute;
class TargetPoolInstanceHealth extends \Google\Collection
{
  protected $healthStatusType = 'Google\Service\Compute\HealthStatus';
  protected $healthStatusDataType = 'array';
  public $kind;

  public function setHealthStatus($healthStatus)
  {
    $this->healthStatus = $healthStatus;
  }

  public function getHealthStatus()
  {
    return $this->healthStatus;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
