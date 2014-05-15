<?php 
namespace Google\Service\Replicapool;
class AccessConfig extends \Google\Model
{
  public $name;
  public $natIp;
  public $type;

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNatIp($natIp)
  {
    $this->natIp = $natIp;
  }

  public function getNatIp()
  {
    return $this->natIp;
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
