<?php 
namespace Google\Service\Compute;
class TargetPoolsScopedList extends \Google\Collection
{
  protected $targetPoolsType = 'Google\Service\Compute\TargetPool';
  protected $targetPoolsDataType = 'array';
  protected $warningType = 'Google\Service\Compute\TargetPoolsScopedListWarning';
  protected $warningDataType = '';

  public function setTargetPools($targetPools)
  {
    $this->targetPools = $targetPools;
  }

  public function getTargetPools()
  {
    return $this->targetPools;
  }

  public function setWarning(\Google\Service\Compute\TargetPoolsScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
