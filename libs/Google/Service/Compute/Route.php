<?php 
namespace Google\Service\Compute;
class Route extends \Google\Collection
{
  public $creationTimestamp;
  public $description;
  public $destRange;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $nextHopGateway;
  public $nextHopInstance;
  public $nextHopIp;
  public $nextHopNetwork;
  public $priority;
  public $selfLink;
  public $tags;
  protected $warningsType = 'Google\Service\Compute\RouteWarnings';
  protected $warningsDataType = 'array';

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

  public function setDestRange($destRange)
  {
    $this->destRange = $destRange;
  }

  public function getDestRange()
  {
    return $this->destRange;
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

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setNextHopGateway($nextHopGateway)
  {
    $this->nextHopGateway = $nextHopGateway;
  }

  public function getNextHopGateway()
  {
    return $this->nextHopGateway;
  }

  public function setNextHopInstance($nextHopInstance)
  {
    $this->nextHopInstance = $nextHopInstance;
  }

  public function getNextHopInstance()
  {
    return $this->nextHopInstance;
  }

  public function setNextHopIp($nextHopIp)
  {
    $this->nextHopIp = $nextHopIp;
  }

  public function getNextHopIp()
  {
    return $this->nextHopIp;
  }

  public function setNextHopNetwork($nextHopNetwork)
  {
    $this->nextHopNetwork = $nextHopNetwork;
  }

  public function getNextHopNetwork()
  {
    return $this->nextHopNetwork;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }

  public function getWarnings()
  {
    return $this->warnings;
  }
}
