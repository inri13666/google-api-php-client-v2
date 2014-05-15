<?php 
namespace Google\Service\Oauth2;
class Userinfoplus extends \Google\Model
{
  public $email;
  public $familyName;
  public $gender;
  public $givenName;
  public $hd;
  public $id;
  public $link;
  public $locale;
  public $name;
  public $picture;
  public $verifiedEmail;

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setFamilyName($familyName)
  {
    $this->familyName = $familyName;
  }

  public function getFamilyName()
  {
    return $this->familyName;
  }

  public function setGender($gender)
  {
    $this->gender = $gender;
  }

  public function getGender()
  {
    return $this->gender;
  }

  public function setGivenName($givenName)
  {
    $this->givenName = $givenName;
  }

  public function getGivenName()
  {
    return $this->givenName;
  }

  public function setHd($hd)
  {
    $this->hd = $hd;
  }

  public function getHd()
  {
    return $this->hd;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLink($link)
  {
    $this->link = $link;
  }

  public function getLink()
  {
    return $this->link;
  }

  public function setLocale($locale)
  {
    $this->locale = $locale;
  }

  public function getLocale()
  {
    return $this->locale;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPicture($picture)
  {
    $this->picture = $picture;
  }

  public function getPicture()
  {
    return $this->picture;
  }

  public function setVerifiedEmail($verifiedEmail)
  {
    $this->verifiedEmail = $verifiedEmail;
  }

  public function getVerifiedEmail()
  {
    return $this->verifiedEmail;
  }
}
