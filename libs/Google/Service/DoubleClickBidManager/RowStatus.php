<?php 
namespace Google\Service\DoubleClickBidManager;
class RowStatus extends \Google\Collection
{
  public $changed;
  public $entityId;
  public $entityName;
  public $errors;
  public $persisted;
  public $rowNumber;

  public function setChanged($changed)
  {
    $this->changed = $changed;
  }

  public function getChanged()
  {
    return $this->changed;
  }

  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }

  public function getEntityId()
  {
    return $this->entityId;
  }

  public function setEntityName($entityName)
  {
    $this->entityName = $entityName;
  }

  public function getEntityName()
  {
    return $this->entityName;
  }

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }

  public function setPersisted($persisted)
  {
    $this->persisted = $persisted;
  }

  public function getPersisted()
  {
    return $this->persisted;
  }

  public function setRowNumber($rowNumber)
  {
    $this->rowNumber = $rowNumber;
  }

  public function getRowNumber()
  {
    return $this->rowNumber;
  }
}
