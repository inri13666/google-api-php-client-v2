<?php 
namespace Google\Service\Oauth2;
class Tokeninfo extends \Google\Model
{
  public $accessType;
  public $audience;
  public $email;
  public $expiresIn;
  public $issuedTo;
  public $scope;
  public $userId;
  public $verifiedEmail;

  public function setAccessType($accessType)
  {
    $this->accessType = $accessType;
  }

  public function getAccessType()
  {
    return $this->accessType;
  }

  public function setAudience($audience)
  {
    $this->audience = $audience;
  }

  public function getAudience()
  {
    return $this->audience;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setExpiresIn($expiresIn)
  {
    $this->expiresIn = $expiresIn;
  }

  public function getExpiresIn()
  {
    return $this->expiresIn;
  }

  public function setIssuedTo($issuedTo)
  {
    $this->issuedTo = $issuedTo;
  }

  public function getIssuedTo()
  {
    return $this->issuedTo;
  }

  public function setScope($scope)
  {
    $this->scope = $scope;
  }

  public function getScope()
  {
    return $this->scope;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }

  public function getUserId()
  {
    return $this->userId;
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
