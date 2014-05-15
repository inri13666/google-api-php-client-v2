<?php 
namespace Google\Service\Directory;
class Groups extends \Google\Collection
{
  public $etag;
  protected $groupsType = 'Google\Service\Directory\Group';
  protected $groupsDataType = 'array';
  public $kind;
  public $nextPageToken;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setGroups($groups)
  {
    $this->groups = $groups;
  }

  public function getGroups()
  {
    return $this->groups;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
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
