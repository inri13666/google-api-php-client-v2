<?php 
namespace Google\Service\Drive;
class ParentReference extends \Google\Model
{
  public $id;
  public $isRoot;
  public $kind;
  public $parentLink;
  public $selfLink;

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsRoot($isRoot)
  {
    $this->isRoot = $isRoot;
  }

  public function getIsRoot()
  {
    return $this->isRoot;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParentLink($parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
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
