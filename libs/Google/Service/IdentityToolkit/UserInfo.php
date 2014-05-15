<?php 
namespace Google\Service\IdentityToolkit;
class UserInfo extends \Google\Collection
{
  public $displayName;
  public $email;
  public $emailVerified;
  public $localId;
  public $passwordHash;
  public $passwordUpdatedAt;
  public $photoUrl;
  protected $providerUserInfoType = 'Google\Service\IdentityToolkit\UserInfoProviderUserInfo';
  protected $providerUserInfoDataType = 'array';
  public $salt;
  public $version;

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

  public function setEmailVerified($emailVerified)
  {
    $this->emailVerified = $emailVerified;
  }

  public function getEmailVerified()
  {
    return $this->emailVerified;
  }

  public function setLocalId($localId)
  {
    $this->localId = $localId;
  }

  public function getLocalId()
  {
    return $this->localId;
  }

  public function setPasswordHash($passwordHash)
  {
    $this->passwordHash = $passwordHash;
  }

  public function getPasswordHash()
  {
    return $this->passwordHash;
  }

  public function setPasswordUpdatedAt($passwordUpdatedAt)
  {
    $this->passwordUpdatedAt = $passwordUpdatedAt;
  }

  public function getPasswordUpdatedAt()
  {
    return $this->passwordUpdatedAt;
  }

  public function setPhotoUrl($photoUrl)
  {
    $this->photoUrl = $photoUrl;
  }

  public function getPhotoUrl()
  {
    return $this->photoUrl;
  }

  public function setProviderUserInfo($providerUserInfo)
  {
    $this->providerUserInfo = $providerUserInfo;
  }

  public function getProviderUserInfo()
  {
    return $this->providerUserInfo;
  }

  public function setSalt($salt)
  {
    $this->salt = $salt;
  }

  public function getSalt()
  {
    return $this->salt;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
