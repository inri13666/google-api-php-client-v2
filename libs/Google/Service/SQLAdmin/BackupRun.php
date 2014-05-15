<?php 
namespace Google\Service\SQLAdmin;
class BackupRun extends \Google\Model
{
  public $backupConfiguration;
  public $dueTime;
  public $endTime;
  public $enqueuedTime;
  protected $errorType = 'Google\Service\SQLAdmin\OperationError';
  protected $errorDataType = '';
  public $instance;
  public $kind;
  public $startTime;
  public $status;

  public function setBackupConfiguration($backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }

  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }

  public function setDueTime($dueTime)
  {
    $this->dueTime = $dueTime;
  }

  public function getDueTime()
  {
    return $this->dueTime;
  }

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

  public function setError(\Google\Service\SQLAdmin\OperationError $error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
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

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
