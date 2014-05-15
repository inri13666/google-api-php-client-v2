<?php 
namespace Google\Service\Audit;
class ActivityId extends \Google\Model
{
  public $applicationId;
  public $customerId;
  public $time;
  public $uniqQualifier;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }

  public function setTime($time)
  {
    $this->time = $time;
  }

  public function getTime()
  {
    return $this->time;
  }

  public function setUniqQualifier($uniqQualifier)
  {
    $this->uniqQualifier = $uniqQualifier;
  }

  public function getUniqQualifier()
  {
    return $this->uniqQualifier;
  }
}
