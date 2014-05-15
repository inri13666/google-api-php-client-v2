<?php 
namespace Google\Service\SQLAdmin;
class InstancesUpdateResponse extends \Google\Model
{
  public $kind;
  public $operation;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setOperation($operation)
  {
    $this->operation = $operation;
  }

  public function getOperation()
  {
    return $this->operation;
  }
}
