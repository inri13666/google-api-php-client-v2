<?php 
namespace Google\Service\IdentityToolkit;
class CreateAuthUriResponse extends \Google\Collection
{
  public $authUri;
  public $kind;
  public $providerId;
  public $providers;
  public $registered;

  public function setAuthUri($authUri)
  {
    $this->authUri = $authUri;
  }

  public function getAuthUri()
  {
    return $this->authUri;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }

  public function getProviderId()
  {
    return $this->providerId;
  }

  public function setProviders($providers)
  {
    $this->providers = $providers;
  }

  public function getProviders()
  {
    return $this->providers;
  }

  public function setRegistered($registered)
  {
    $this->registered = $registered;
  }

  public function getRegistered()
  {
    return $this->registered;
  }
}
