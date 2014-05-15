<?php 
namespace Google\Service\Manager;
class ServiceAccount extends \Google\Collection
{
  public $email;
  public $scopes;

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }

  public function getScopes()
  {
    return $this->scopes;
  }
}
