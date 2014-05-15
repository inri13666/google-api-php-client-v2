<?php 
namespace Google\Service\Directory;
class UserOrganization extends \Google\Model
{
  public $costCenter;
  public $customType;
  public $department;
  public $description;
  public $domain;
  public $location;
  public $name;
  public $primary;
  public $symbol;
  public $title;
  public $type;

  public function setCostCenter($costCenter)
  {
    $this->costCenter = $costCenter;
  }

  public function getCostCenter()
  {
    return $this->costCenter;
  }

  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }

  public function getCustomType()
  {
    return $this->customType;
  }

  public function setDepartment($department)
  {
    $this->department = $department;
  }

  public function getDepartment()
  {
    return $this->department;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setSymbol($symbol)
  {
    $this->symbol = $symbol;
  }

  public function getSymbol()
  {
    return $this->symbol;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
