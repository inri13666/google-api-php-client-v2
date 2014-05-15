<?php 
namespace Google\Service\Directory;
class Asp extends \Google\Model
{
  public $codeId;
  public $creationTime;
  public $etag;
  public $kind;
  public $lastTimeUsed;
  public $name;
  public $userKey;

  public function setCodeId($codeId)
  {
    $this->codeId = $codeId;
  }

  public function getCodeId()
  {
    return $this->codeId;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
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

  public function setLastTimeUsed($lastTimeUsed)
  {
    $this->lastTimeUsed = $lastTimeUsed;
  }

  public function getLastTimeUsed()
  {
    return $this->lastTimeUsed;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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
