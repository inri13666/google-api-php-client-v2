<?php 
namespace Google\Service\Analytics;
class EntityUserLink extends \Google\Model
{
  protected $entityType = 'Google\Service\Analytics\EntityUserLinkEntity';
  protected $entityDataType = '';
  public $id;
  public $kind;
  protected $permissionsType = 'Google\Service\Analytics\EntityUserLinkPermissions';
  protected $permissionsDataType = '';
  public $selfLink;
  protected $userRefType = 'Google\Service\Analytics\UserRef';
  protected $userRefDataType = '';

  public function setEntity(\Google\Service\Analytics\EntityUserLinkEntity $entity)
  {
    $this->entity = $entity;
  }

  public function getEntity()
  {
    return $this->entity;
  }

  public function setId($id)
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

  public function setPermissions(\Google\Service\Analytics\EntityUserLinkPermissions $permissions)
  {
    $this->permissions = $permissions;
  }

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUserRef(\Google\Service\Analytics\UserRef $userRef)
  {
    $this->userRef = $userRef;
  }

  public function getUserRef()
  {
    return $this->userRef;
  }
}
