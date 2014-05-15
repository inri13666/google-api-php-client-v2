<?php 
namespace Google\Service\IdentityToolkit;
class SetAccountInfoResponse extends \Google\Collection
{
  public $displayName;
  public $email;
  public $idToken;
  public $kind;
  protected $providerUserInfoType = 'Google\Service\IdentityToolkit\SetAccountInfoResponseProviderUserInfo';
  protected $providerUserInfoDataType = 'array';

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

  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }

  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }
}
