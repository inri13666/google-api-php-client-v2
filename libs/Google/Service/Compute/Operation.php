<?php 
namespace Google\Service\Compute;
class Operation extends \Google\Collection
{
  public $clientOperationId;
  public $creationTimestamp;
  public $endTime;
  protected $errorType = 'Google\Service\Compute\OperationError';
  protected $errorDataType = '';
  public $httpErrorMessage;
  public $httpErrorStatusCode;
  public $id;
  public $insertTime;
  public $kind;
  public $name;
  public $operationType;
  public $progress;
  public $region;
  public $selfLink;
  public $startTime;
  public $status;
  public $statusMessage;
  public $targetId;
  public $targetLink;
  public $user;
  protected $warningsType = 'Google\Service\Compute\OperationWarnings';
  protected $warningsDataType = 'array';
  public $zone;

  public function setClientOperationId($clientOperationId)
  {
    $this->clientOperationId = $clientOperationId;
  }

  public function getClientOperationId()
  {
    return $this->clientOperationId;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setError(\Google\Service\Compute\OperationError $error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
  }

  public function setHttpErrorMessage($httpErrorMessage)
  {
    $this->httpErrorMessage = $httpErrorMessage;
  }

  public function getHttpErrorMessage()
  {
    return $this->httpErrorMessage;
  }

  public function setHttpErrorStatusCode($httpErrorStatusCode)
  {
    $this->httpErrorStatusCode = $httpErrorStatusCode;
  }

  public function getHttpErrorStatusCode()
  {
    return $this->httpErrorStatusCode;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInsertTime($insertTime)
  {
    $this->insertTime = $insertTime;
  }

  public function getInsertTime()
  {
    return $this->insertTime;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOperationType($operationType)
  {
    $this->operationType = $operationType;
  }

  public function getOperationType()
  {
    return $this->operationType;
  }

  public function setProgress($progress)
  {
    $this->progress = $progress;
  }

  public function getProgress()
  {
    return $this->progress;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
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

  public function setStatusMessage($statusMessage)
  {
    $this->statusMessage = $statusMessage;
  }

  public function getStatusMessage()
  {
    return $this->statusMessage;
  }

  public function setTargetId($targetId)
  {
    $this->targetId = $targetId;
  }

  public function getTargetId()
  {
    return $this->targetId;
  }

  public function setTargetLink($targetLink)
  {
    $this->targetLink = $targetLink;
  }

  public function getTargetLink()
  {
    return $this->targetLink;
  }

  public function setUser($user)
  {
    $this->user = $user;
  }

  public function getUser()
  {
    return $this->user;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }

  public function getWarnings()
  {
    return $this->warnings;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }

  public function getZone()
  {
    return $this->zone;
  }
}
