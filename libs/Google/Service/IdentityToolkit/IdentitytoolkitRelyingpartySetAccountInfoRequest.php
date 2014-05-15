<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartySetAccountInfoRequest extends \Google\Collection
{
  public $captchaChallenge;
  public $captchaResponse;
  public $displayName;
  public $email;
  public $emailVerified;
  public $idToken;
  public $localId;
  public $oobCode;
  public $password;
  public $provider;
  public $upgradeToFederatedLogin;

  public function setCaptchaChallenge($captchaChallenge)
  {
    $this->captchaChallenge = $captchaChallenge;
  }

  public function getCaptchaChallenge()
  {
    return $this->captchaChallenge;
  }

  public function setCaptchaResponse($captchaResponse)
  {
    $this->captchaResponse = $captchaResponse;
  }

  public function getCaptchaResponse()
  {
    return $this->captchaResponse;
  }

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

  public function setOobCode($oobCode)
  {
    $this->oobCode = $oobCode;
  }

  public function getOobCode()
  {
    return $this->oobCode;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setProvider($provider)
  {
    $this->provider = $provider;
  }

  public function getProvider()
  {
    return $this->provider;
  }

  public function setUpgradeToFederatedLogin($upgradeToFederatedLogin)
  {
    $this->upgradeToFederatedLogin = $upgradeToFederatedLogin;
  }

  public function getUpgradeToFederatedLogin()
  {
    return $this->upgradeToFederatedLogin;
  }
}
