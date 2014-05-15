<?php 
namespace Google\Service\Compute;
class OperationsScopedList extends \Google\Collection
{
  protected $operationsType = 'Google\Service\Compute\Operation';
  protected $operationsDataType = 'array';
  protected $warningType = 'Google\Service\Compute\OperationsScopedListWarning';
  protected $warningDataType = '';

  public function setOperations($operations)
  {
    $this->operations = $operations;
  }

  public function getOperations()
  {
    return $this->operations;
  }

  public function setWarning(\Google\Service\Compute\OperationsScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
