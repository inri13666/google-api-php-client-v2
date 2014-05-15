<?php 
namespace Google\Service\Reports;
class ActivityActor extends \Google\Model
{
  public $callerType;
  public $email;
  public $key;
  public $profileId;

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

  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }

  public function getProfileId()
  {
    return $this->profileId;
  }
}
