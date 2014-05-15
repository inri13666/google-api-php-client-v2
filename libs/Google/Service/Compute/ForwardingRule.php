<?php 
namespace Google\Service\Compute;
class ForwardingRule extends \Google\Model
{
  public $iPAddress;
  public $iPProtocol;
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $portRange;
  public $region;
  public $selfLink;
  public $target;

  public function setIPAddress($iPAddress)
  {
    $this->iPAddress = $iPAddress;
  }

  public function getIPAddress()
  {
    return $this->iPAddress;
  }

  public function setIPProtocol($iPProtocol)
  {
    $this->iPProtocol = $iPProtocol;
  }

  public function getIPProtocol()
  {
    return $this->iPProtocol;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
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

  public function setPortRange($portRange)
  {
    $this->portRange = $portRange;
  }

  public function getPortRange()
  {
    return $this->portRange;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTarget($target)
  {
    $this->target = $target;
  }

  public function getTarget()
  {
    return $this->target;
  }
}
