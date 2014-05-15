<?php 
namespace Google\Service\Directory;
class Users extends \Google\Collection
{
  public $etag;
  public $kind;
  public $nextPageToken;
  public $triggerEvent;
  protected $usersType = 'Google\Service\Directory\User';
  protected $usersDataType = 'array';

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

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setTriggerEvent($triggerEvent)
  {
    $this->triggerEvent = $triggerEvent;
  }

  public function getTriggerEvent()
  {
    return $this->triggerEvent;
  }

  public function setUsers($users)
  {
    $this->users = $users;
  }

  public function getUsers()
  {
    return $this->users;
  }
}
