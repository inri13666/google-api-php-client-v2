<?php 
namespace Google\Service\Analytics;
class AccountRef extends \Google\Model
{
  public $href;
  public $id;
  public $kind;
  public $name;

  public function setHref($href)
  {
    $this->href = $href;
  }

  public function getHref()
  {
    return $this->href;
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
}
