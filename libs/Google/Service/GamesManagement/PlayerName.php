<?php 
namespace Google\Service\GamesManagement;
class PlayerName extends \Google\Model
{
  public $familyName;
  public $givenName;

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getFamilyName()
  {
    return $this->familyName;
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
