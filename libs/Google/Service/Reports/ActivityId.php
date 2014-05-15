<?php 
namespace Google\Service\Reports;
class ActivityId extends \Google\Model
{
  public $applicationName;
  public $customerId;
  public $time;
  public $uniqueQualifier;

  public function setApplicationName($applicationName)
  {
    $this->applicationName = $applicationName;
  }

  public function getApplicationName()
  {
    return $this->applicationName;
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

  public function setUniqueQualifier($uniqueQualifier)
  {
    $this->uniqueQualifier = $uniqueQualifier;
  }

  public function getUniqueQualifier()
  {
    return $this->uniqueQualifier;
  }
}
