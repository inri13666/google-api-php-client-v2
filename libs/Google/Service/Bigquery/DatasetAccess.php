<?php 
namespace Google\Service\Bigquery;
class DatasetAccess extends \Google\Model
{
  public $domain;
  public $groupByEmail;
  public $role;
  public $specialGroup;
  public $userByEmail;

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setGroupByEmail($groupByEmail)
  {
    $this->groupByEmail = $groupByEmail;
  }

  public function getGroupByEmail()
  {
    return $this->groupByEmail;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setSpecialGroup($specialGroup)
  {
    $this->specialGroup = $specialGroup;
  }

  public function getSpecialGroup()
  {
    return $this->specialGroup;
  }

  public function setUserByEmail($userByEmail)
  {
    $this->userByEmail = $userByEmail;
  }

  public function getUserByEmail()
  {
    return $this->userByEmail;
  }
}
