<?php 
namespace Google\Service\CivicInfo;
class ElectionOfficial extends \Google\Model
{
  public $emailAddress;
  public $faxNumber;
  public $name;
  public $officePhoneNumber;
  public $title;

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setFaxNumber($faxNumber)
  {
    $this->faxNumber = $faxNumber;
  }

  public function getFaxNumber()
  {
    return $this->faxNumber;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOfficePhoneNumber($officePhoneNumber)
  {
    $this->officePhoneNumber = $officePhoneNumber;
  }

  public function getOfficePhoneNumber()
  {
    return $this->officePhoneNumber;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
