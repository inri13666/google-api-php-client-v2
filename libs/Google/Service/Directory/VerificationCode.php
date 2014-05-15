<?php 
namespace Google\Service\Directory;
class VerificationCode extends \Google\Model
{
  public $etag;
  public $kind;
  public $userId;
  public $verificationCode;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUserId($userId)
  {
    $this->userId = $userId;
  }

  public function getUserId()
  {
    return $this->userId;
  }

  public function setVerificationCode($verificationCode)
  {
    $this->verificationCode = $verificationCode;
  }

  public function getVerificationCode()
  {
    return $this->verificationCode;
  }
}
