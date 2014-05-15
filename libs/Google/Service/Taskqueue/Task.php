<?php 
namespace Google\Service\Taskqueue;
class Task extends \Google\Model
{
  public $enqueueTimestamp;
  public $id;
  public $kind;
  public $leaseTimestamp;
  public $payloadBase64;
  public $queueName;
  public $retryCount;
  public $tag;

  public function setEnqueueTimestamp($enqueueTimestamp)
  {
    $this->enqueueTimestamp = $enqueueTimestamp;
  }

  public function getEnqueueTimestamp()
  {
    return $this->enqueueTimestamp;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaseTimestamp($leaseTimestamp)
  {
    $this->leaseTimestamp = $leaseTimestamp;
  }

  public function getLeaseTimestamp()
  {
    return $this->leaseTimestamp;
  }

  public function setPayloadBase64($payloadBase64)
  {
    $this->payloadBase64 = $payloadBase64;
  }

  public function getPayloadBase64()
  {
    return $this->payloadBase64;
  }

  public function setQueueName($queueName)
  {
    $this->queueName = $queueName;
  }

  public function getQueueName()
  {
    return $this->queueName;
  }

  public function setRetryCount($retryCount)
  {
    $this->retryCount = $retryCount;
  }

  public function getRetryCount()
  {
    return $this->retryCount;
  }

  public function setTag($tag)
  {
    $this->tag = $tag;
  }

  public function getTag()
  {
    return $this->tag;
  }
}
