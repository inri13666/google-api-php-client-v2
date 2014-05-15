<?php 
namespace Google\Service\IdentityToolkit;
class DownloadAccountResponse extends \Google\Collection
{
  public $kind;
  public $nextPageToken;
  protected $usersType = 'Google\Service\IdentityToolkit\UserInfo';
  protected $usersDataType = 'array';

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

  public function setUsers($users)
  {
    $this->users = $users;
  }

  public function getUsers()
  {
    return $this->users;
  }
}
