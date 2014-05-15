<?php 
namespace Google\Service\Compute;
class AccessConfig extends \Google\Model
{
  public $kind;
  public $name;
  public $natIP;
  public $type;

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

  public function setNatIP($natIP)
  {
    $this->natIP = $natIP;
  }

  public function getNatIP()
  {
    return $this->natIP;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
