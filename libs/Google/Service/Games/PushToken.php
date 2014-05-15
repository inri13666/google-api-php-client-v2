<?php 
namespace Google\Service\Games;
class PushToken extends \Google\Model
{
  public $clientRevision;
  protected $idType = 'Google\Service\Games\PushTokenId';
  protected $idDataType = '';
  public $kind;
  public $language;

  public function setClientRevision($clientRevision)
  {
    $this->clientRevision = $clientRevision;
  }

  public function getClientRevision()
  {
    return $this->clientRevision;
  }

  public function setId(\Google\Service\Games\PushTokenId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }
}
