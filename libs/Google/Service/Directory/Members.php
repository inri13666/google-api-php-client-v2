<?php 
namespace Google\Service\Directory;
class Members extends \Google\Collection
{
  public $etag;
  public $kind;
  protected $membersType = 'Google\Service\Directory\Member';
  protected $membersDataType = 'array';
  public $nextPageToken;

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

  public function setMembers($members)
  {
    $this->members = $members;
  }

  public function getMembers()
  {
    return $this->members;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
