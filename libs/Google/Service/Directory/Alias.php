<?php 
namespace Google\Service\Directory;
class Alias extends \Google\Model
{
  public $alias;
  public $etag;
  public $id;
  public $kind;
  public $primaryEmail;

  public function setAlias($alias)
  {
    $this->alias = $alias;
  }

  public function getAlias()
  {
    return $this->alias;
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

  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }

  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }
}
