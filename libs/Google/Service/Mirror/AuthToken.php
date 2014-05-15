<?php 
namespace Google\Service\Mirror;
class AuthToken extends \Google\Model
{
  public $authToken;
  public $type;

  public function setAuthToken($authToken)
  {
    $this->authToken = $authToken;
  }

  public function getAuthToken()
  {
    return $this->authToken;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
