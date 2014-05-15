<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyGetAccountInfoRequest extends \Google\Collection
{
  public $email;
  public $idToken;
  public $localId;

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

  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getLocalId()
  {
    return $this->localId;
  }
}
