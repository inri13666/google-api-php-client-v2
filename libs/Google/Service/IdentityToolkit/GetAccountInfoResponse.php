<?php 
namespace Google\Service\IdentityToolkit;
class GetAccountInfoResponse extends \Google\Collection
{
  public $kind;
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

  public function setUsers($users)
  {
    $this->users = $users;
  }

  public function getUsers()
  {
    return $this->users;
  }
}
