<?php 
namespace Google\Service\Directory;
class Token extends \Google\Collection
{
  public $anonymous;
  public $clientId;
  public $displayText;
  public $etag;
  public $kind;
  public $nativeApp;
  public $scopes;
  public $userKey;

  public function setAnonymous($anonymous)
  {
    $this->anonymous = $anonymous;
  }

  public function getAnonymous()
  {
    return $this->anonymous;
  }

  public function setClientId($clientId)
  {
    $this->clientId = $clientId;
  }

  public function getClientId()
  {
    return $this->clientId;
  }

  public function setDisplayText($displayText)
  {
    $this->displayText = $displayText;
  }

  public function getDisplayText()
  {
    return $this->displayText;
  }

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

  public function setNativeApp($nativeApp)
  {
    $this->nativeApp = $nativeApp;
  }

  public function getNativeApp()
  {
    return $this->nativeApp;
  }

  public function setScopes($scopes)
  {
    $this->scopes = $scopes;
  }

  public function getScopes()
  {
    return $this->scopes;
  }

  public function setUserKey($userKey)
  {
    $this->userKey = $userKey;
  }

  public function getUserKey()
  {
    return $this->userKey;
  }
}
