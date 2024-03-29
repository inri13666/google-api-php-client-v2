<?php 
namespace Google\Service\Analytics;
class Account extends \Google\Model
{
  protected $childLinkType = 'Google\Service\Analytics\AccountChildLink';
  protected $childLinkDataType = '';
  public $created;
  public $id;
  public $kind;
  public $name;
  protected $permissionsType = 'Google\Service\Analytics\AccountPermissions';
  protected $permissionsDataType = '';
  public $selfLink;
  public $updated;

  public function setChildLink(\Google\Service\Analytics\AccountChildLink $childLink)
  {
    $this->childLink = $childLink;
  }

  public function getChildLink()
  {
    return $this->childLink;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPermissions(\Google\Service\Analytics\AccountPermissions $permissions)
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

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
