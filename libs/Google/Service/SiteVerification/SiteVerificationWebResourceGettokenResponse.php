<?php 
namespace Google\Service\SiteVerification;
class SiteVerificationWebResourceGettokenResponse extends \Google\Model
{
  public $method;
  public $token;

  public function setMethod($method)
  {
    $this->method = $method;
  }

  public function getMethod()
  {
    return $this->method;
  }

  public function setToken($token)
  {
    $this->token = $token;
  }

  public function getToken()
  {
    return $this->token;
  }
}
