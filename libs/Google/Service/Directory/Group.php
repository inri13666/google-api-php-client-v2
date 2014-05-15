<?php 
namespace Google\Service\Directory;
class Group extends \Google\Collection
{
  public $adminCreated;
  public $aliases;
  public $description;
  public $directMembersCount;
  public $email;
  public $etag;
  public $id;
  public $kind;
  public $name;
  public $nonEditableAliases;

  public function setAdminCreated($adminCreated)
  {
    $this->adminCreated = $adminCreated;
  }

  public function getAdminCreated()
  {
    return $this->adminCreated;
  }

  public function setAliases($aliases)
  {
    $this->aliases = $aliases;
  }

  public function getAliases()
  {
    return $this->aliases;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDirectMembersCount($directMembersCount)
  {
    $this->directMembersCount = $directMembersCount;
  }

  public function getDirectMembersCount()
  {
    return $this->directMembersCount;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setNonEditableAliases($nonEditableAliases)
  {
    $this->nonEditableAliases = $nonEditableAliases;
  }

  public function getNonEditableAliases()
  {
    return $this->nonEditableAliases;
  }
}
