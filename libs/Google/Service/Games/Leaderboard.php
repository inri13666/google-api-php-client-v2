<?php 
namespace Google\Service\Games;
class Leaderboard extends \Google\Model
{
  public $iconUrl;
  public $id;
  public $isIconUrlDefault;
  public $kind;
  public $name;
  public $order;

  public function setIconUrl($iconUrl)
  {
    $this->iconUrl = $iconUrl;
  }

  public function getIconUrl()
  {
    return $this->iconUrl;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIsIconUrlDefault($isIconUrlDefault)
  {
    $this->isIconUrlDefault = $isIconUrlDefault;
  }

  public function getIsIconUrlDefault()
  {
    return $this->isIconUrlDefault;
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

  public function setOrder($order)
  {
    $this->order = $order;
  }

  public function getOrder()
  {
    return $this->order;
  }
}
