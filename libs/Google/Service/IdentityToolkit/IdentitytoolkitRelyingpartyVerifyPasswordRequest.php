<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyVerifyPasswordRequest extends \Google\Model
{
  public $captchaChallenge;
  public $captchaResponse;
  public $email;
  public $password;
  public $pendingIdToken;

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

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setPassword($password)
  {
    $this->password = $password;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function setPendingIdToken($pendingIdToken)
  {
    $this->pendingIdToken = $pendingIdToken;
  }

  public function getPendingIdToken()
  {
    return $this->pendingIdToken;
  }
}
