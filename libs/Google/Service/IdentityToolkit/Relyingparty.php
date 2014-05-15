<?php 
namespace Google\Service\IdentityToolkit;
class Relyingparty extends \Google\Model
{
  public $captchaResp;
  public $challenge;
  public $email;
  public $idToken;
  public $kind;
  public $newEmail;
  public $requestType;
  public $userIp;

  public function setCaptchaResp($captchaResp)
  {
    $this->captchaResp = $captchaResp;
  }

  public function getCaptchaResp()
  {
    return $this->captchaResp;
  }

  public function setChallenge($challenge)
  {
    $this->challenge = $challenge;
  }

  public function getChallenge()
  {
    return $this->challenge;
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

  public function setNewEmail($newEmail)
  {
    $this->newEmail = $newEmail;
  }

  public function getNewEmail()
  {
    return $this->newEmail;
  }

  public function setRequestType($requestType)
  {
    $this->requestType = $requestType;
  }

  public function getRequestType()
  {
    return $this->requestType;
  }

  public function setUserIp($userIp)
  {
    $this->userIp = $userIp;
  }

  public function getUserIp()
  {
    return $this->userIp;
  }
}
