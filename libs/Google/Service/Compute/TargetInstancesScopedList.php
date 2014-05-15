<?php 
namespace Google\Service\Compute;
class TargetInstancesScopedList extends \Google\Collection
{
  protected $targetInstancesType = 'Google\Service\Compute\TargetInstance';
  protected $targetInstancesDataType = 'array';
  protected $warningType = 'Google\Service\Compute\TargetInstancesScopedListWarning';
  protected $warningDataType = '';

  public function setTargetInstances($targetInstances)
  {
    $this->targetInstances = $targetInstances;
  }

  public function getTargetInstances()
  {
    return $this->targetInstances;
  }

  public function setWarning(\Google\Service\Compute\TargetInstancesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
