<?php 
namespace Google\Service\IdentityToolkit;
class IdentitytoolkitRelyingpartyCreateAuthUriRequest extends \Google\Model
{
  public $appId;
  public $clientId;
  public $context;
  public $continueUri;
  public $identifier;
  public $openidRealm;
  public $otaApp;
  public $providerId;

  public function setAppId($appId)
  {
    $this->appId = $appId;
  }

  public function getAppId()
  {
    return $this->appId;
  }

  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }

  public function getClientId()
  {
    return $this->clientId;
  }

  public function setContext($context)
  {
    $this->context = $context;
  }

  public function getContext()
  {
    return $this->context;
  }

  public function setContinueUri($continueUri)
  {
    $this->continueUri = $continueUri;
  }

  public function getContinueUri()
  {
    return $this->continueUri;
  }

  public function setIdentifier($identifier)
  {
    $this->identifier = $identifier;
  }

  public function getIdentifier()
  {
    return $this->identifier;
  }

  public function setOpenidRealm($openidRealm)
  {
    $this->openidRealm = $openidRealm;
  }

  public function getOpenidRealm()
  {
    return $this->openidRealm;
  }

  public function setOtaApp($otaApp)
  {
    $this->otaApp = $otaApp;
  }

  public function getOtaApp()
  {
    return $this->otaApp;
  }

  public function setProviderId($providerId)
  {
    $this->providerId = $providerId;
  }

  public function getProviderId()
  {
    return $this->providerId;
  }
}
