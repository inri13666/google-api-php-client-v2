<?php 
namespace Google\Service\Storage;
class ObjectAccessControl extends \Google\Model
{
  public $bucket;
  public $domain;
  public $email;
  public $entity;
  public $entityId;
  public $etag;
  public $generation;
  public $id;
  public $kind;
  public $object;
  protected $projectTeamType = 'Google\Service\Storage\ObjectAccessControlProjectTeam';
  protected $projectTeamDataType = '';
  public $role;
  public $selfLink;

  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }

  public function getBucket()
  {
    return $this->bucket;
  }

  public function setDomain($domain)
  {
    $this->domain = $domain;
  }

  public function getDomain()
  {
    return $this->domain;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEntity($entity)
  {
    $this->entity = $entity;
  }

  public function getEntity()
  {
    return $this->entity;
  }

  public function setEntityId($entityId)
  {
    $this->entityId = $entityId;
  }

  public function getEntityId()
  {
    return $this->entityId;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }

  public function getGeneration()
  {
    return $this->generation;
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

  public function setObject($object)
  {
    $this->object = $object;
  }

  public function getObject()
  {
    return $this->object;
  }

  public function setProjectTeam(\Google\Service\Storage\ObjectAccessControlProjectTeam $projectTeam)
  {
    $this->projectTeam = $projectTeam;
  }

  public function getProjectTeam()
  {
    return $this->projectTeam;
  }

  public function setRole($role)
  {
    $this->role = $role;
  }

  public function getRole()
  {
    return $this->role;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
