<?php 
namespace Google\Service\AdSense;
class Account extends \Google\Collection
{
  public $id;
  public $kind;
  public $name;
  public $premium;
  protected $subAccountsType = 'Google\Service\AdSense\Account';
  protected $subAccountsDataType = 'array';
  public $timezone;

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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPremium($premium)
  {
    $this->premium = $premium;
  }

  public function getPremium()
  {
    return $this->premium;
  }

  public function setSubAccounts($subAccounts)
  {
    $this->subAccounts = $subAccounts;
  }

  public function getSubAccounts()
  {
    return $this->subAccounts;
  }

  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }

  public function getTimezone()
  {
    return $this->timezone;
  }
}
