<?php 
namespace Google\Service\Audit;
class ActivityActor extends \Google\Model
{
  public $applicationId;
  public $callerType;
  public $email;
  public $key;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setCallerType($callerType)
  {
    $this->callerType = $callerType;
  }

  public function getCallerType()
  {
    return $this->callerType;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setKey($key)
  {
    $this->key = $key;
  }

  public function getKey()
  {
    return $this->key;
  }
}
