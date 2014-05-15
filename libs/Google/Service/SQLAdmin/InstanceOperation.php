<?php 
namespace Google\Service\SQLAdmin;
class InstanceOperation extends \Google\Collection
{
  public $endTime;
  public $enqueuedTime;
  protected $errorType = 'Google\Service\SQLAdmin\OperationError';
  protected $errorDataType = 'array';
  protected $exportContextType = 'Google\Service\SQLAdmin\ExportContext';
  protected $exportContextDataType = '';
  protected $importContextType = 'Google\Service\SQLAdmin\ImportContext';
  protected $importContextDataType = '';
  public $instance;
  public $kind;
  public $operation;
  public $operationType;
  public $startTime;
  public $state;
  public $userEmailAddress;

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setEnqueuedTime($enqueuedTime)
  {
    $this->enqueuedTime = $enqueuedTime;
  }

  public function getEnqueuedTime()
  {
    return $this->enqueuedTime;
  }

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
  }

  public function setExportContext(\Google\Service\SQLAdmin\ExportContext $exportContext)
  {
    $this->exportContext = $exportContext;
  }

  public function getExportContext()
  {
    return $this->exportContext;
  }

  public function setImportContext(\Google\Service\SQLAdmin\ImportContext $importContext)
  {
    $this->importContext = $importContext;
  }

  public function getImportContext()
  {
    return $this->importContext;
  }

  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getInstance()
  {
    return $this->instance;
  }

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

  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }

  public function getOperationType()
  {
    return $this->operationType;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setUserEmailAddress($userEmailAddress)
  {
    $this->userEmailAddress = $userEmailAddress;
  }

  public function getUserEmailAddress()
  {
    return $this->userEmailAddress;
  }
}
