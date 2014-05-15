<?php 
namespace Google\Service\Reports;
class UsageReportEntity extends \Google\Model
{
  public $customerId;
  public $profileId;
  public $type;
  public $userEmail;

  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }

  public function setProfileId($profileId)
  {
    $this->profileId = $profileId;
  }

  public function getProfileId()
  {
    return $this->profileId;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }

  public function getUserEmail()
  {
    return $this->userEmail;
  }
}
