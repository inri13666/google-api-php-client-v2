<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyResetPasswordRequest extends \Google\Model
{
  public $email;
  public $newPassword;
  public $oldPassword;
  public $oobCode;

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setNewPassword($newPassword)
  {
    $this->newPassword = $newPassword;
  }

  public function getNewPassword()
  {
    return $this->newPassword;
  }

  public function setOldPassword($oldPassword)
  {
    $this->oldPassword = $oldPassword;
  }

  public function getOldPassword()
  {
    return $this->oldPassword;
  }

  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }

  public function getOobCode()
  {
    return $this->oobCode;
  }
}
