<?php 
namespace Google\Service\Compute;
class TargetPoolsAddInstanceRequest extends \Google\Collection
{
  protected $instancesType = 'Google\Service\Compute\InstanceReference';
  protected $instancesDataType = 'array';

  public function setInstances($instances)
  {
    $this->instances = $instances;
  }

  public function getInstances()
  {
    return $this->instances;
  }
}
