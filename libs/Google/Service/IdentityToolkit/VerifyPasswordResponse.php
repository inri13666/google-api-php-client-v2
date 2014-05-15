<?php 
namespace Google\Service\IdentityToolkit;
class VerifyPasswordResponse extends \Google\Model
{
  public $displayName;
  public $email;
  public $idToken;
  public $kind;
  public $localId;
  public $photoUrl;
  public $registered;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setIdToken($idToken)
  {
    $this->idToken = $idToken;
  }

  public function getIdToken()
  {
    return $this->idToken;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getLocalId()
  {
    return $this->localId;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }

  public function getRegistered()
  {
    return $this->registered;
  }
}
