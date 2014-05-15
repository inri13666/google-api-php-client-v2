<?php 
namespace Google\Service\Drive;
class User extends \Google\Model
{
  public $displayName;
  public $emailAddress;
  public $isAuthenticatedUser;
  public $kind;
  public $permissionId;
  protected $pictureType = 'Google\Service\Drive\UserPicture';
  protected $pictureDataType = '';

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEmailAddress($emailAddress)
  {
    $this->emailAddress = $emailAddress;
  }

  public function getEmailAddress()
  {
    return $this->emailAddress;
  }

  public function setIsAuthenticatedUser($isAuthenticatedUser)
  {
    $this->isAuthenticatedUser = $isAuthenticatedUser;
  }

  public function getIsAuthenticatedUser()
  {
    return $this->isAuthenticatedUser;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }

  public function getPermissionId()
  {
    return $this->permissionId;
  }

  public function setPicture(\Google\Service\Drive\UserPicture $picture)
  {
    $this->picture = $picture;
  }

  public function getPicture()
  {
    return $this->picture;
  }
}
