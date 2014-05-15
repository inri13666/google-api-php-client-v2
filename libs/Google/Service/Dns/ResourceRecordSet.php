<?php 
namespace Google\Service\Dns;
class ResourceRecordSet extends \Google\Collection
{
  public $kind;
  public $name;
  public $rrdatas;
  public $ttl;
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

  public function setRrdatas($rrdatas)
  {
    $this->rrdatas = $rrdatas;
  }

  public function getRrdatas()
  {
    return $this->rrdatas;
  }

  public function setTtl($ttl)
  {
    $this->ttl = $ttl;
  }

  public function getTtl()
  {
    return $this->ttl;
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
