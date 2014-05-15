<?php 
namespace Google\Service\Games;
class RevisionCheckResponse extends \Google\Model
{
  public $apiVersion;
  public $kind;
  public $revisionStatus;

  public function setApiVersion($apiVersion)
  {
    $this->apiVersion = $apiVersion;
  }

  public function getApiVersion()
  {
    return $this->apiVersion;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRevisionStatus($revisionStatus)
  {
    $this->revisionStatus = $revisionStatus;
  }

  public function getRevisionStatus()
  {
    return $this->revisionStatus;
  }
}
