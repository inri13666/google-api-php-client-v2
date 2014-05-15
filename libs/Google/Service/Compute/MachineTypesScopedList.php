<?php 
namespace Google\Service\Compute;
class MachineTypesScopedList extends \Google\Collection
{
  protected $machineTypesType = 'Google\Service\Compute\MachineType';
  protected $machineTypesDataType = 'array';
  protected $warningType = 'Google\Service\Compute\MachineTypesScopedListWarning';
  protected $warningDataType = '';

  public function setMachineTypes($machineTypes)
  {
    $this->machineTypes = $machineTypes;
  }

  public function getMachineTypes()
  {
    return $this->machineTypes;
  }

  public function setWarning(\Google\Service\Compute\MachineTypesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
