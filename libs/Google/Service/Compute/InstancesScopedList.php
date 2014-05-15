<?php 
namespace Google\Service\Compute;
class InstancesScopedList extends \Google\Collection
{
  protected $instancesType = 'Google\Service\Compute\Instance';
  protected $instancesDataType = 'array';
  protected $warningType = 'Google\Service\Compute\InstancesScopedListWarning';
  protected $warningDataType = '';

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }

  public function getInstances()
  {
    return $this->instances;
  }

  public function setWarning(\Google\Service\Compute\InstancesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
