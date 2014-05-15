<?php 
namespace Google\Service\Directory;
class UserName extends \Google\Model
{
  public $familyName;
  public $fullName;
  public $givenName;

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getFamilyName()
  {
    return $this->familyName;
  }

  public function setFullName($fullName)
  {
    $this->fullName = $fullName;
  }

  public function getFullName()
  {
    return $this->fullName;
  }

  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }

  public function getGivenName()
  {
    return $this->givenName;
  }
}
