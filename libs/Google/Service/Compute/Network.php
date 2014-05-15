<?php 
namespace Google\Service\Compute;
class Network extends \Google\Model
{
  public $iPv4Range;
  public $creationTimestamp;
  public $description;
  public $gatewayIPv4;
  public $id;
  public $kind;
  public $name;
  public $selfLink;

  public function setIPv4Range($iPv4Range)
  {
    $this->iPv4Range = $iPv4Range;
  }

  public function getIPv4Range()
  {
    return $this->iPv4Range;
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

  public function setGatewayIPv4($gatewayIPv4)
  {
    $this->gatewayIPv4 = $gatewayIPv4;
  }

  public function getGatewayIPv4()
  {
    return $this->gatewayIPv4;
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

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
