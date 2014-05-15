<?php 
namespace Google\Service\Drive;
class ChildReference extends \Google\Model
{
  public $childLink;
  public $id;
  public $kind;
  public $selfLink;

  public function setChildLink($childLink)
  {
    $this->childLink = $childLink;
  }

  public function getChildLink()
  {
    return $this->childLink;
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

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
