<?php 
namespace Google\Service\Compute;
class Firewall extends \Google\Collection
{
  protected $allowedType = 'Google\Service\Compute\FirewallAllowed';
  protected $allowedDataType = 'array';
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  public $network;
  public $selfLink;
  public $sourceRanges;
  public $sourceTags;
  public $targetTags;

  public function setAllowed($allowed)
  {
    $this->allowed = $allowed;
  }

  public function getAllowed()
  {
    return $this->allowed;
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

  public function setNetwork($network)
  {
    $this->network = $network;
  }

  public function getNetwork()
  {
    return $this->network;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSourceRanges($sourceRanges)
  {
    $this->sourceRanges = $sourceRanges;
  }

  public function getSourceRanges()
  {
    return $this->sourceRanges;
  }

  public function setSourceTags($sourceTags)
  {
    $this->sourceTags = $sourceTags;
  }

  public function getSourceTags()
  {
    return $this->sourceTags;
  }

  public function setTargetTags($targetTags)
  {
    $this->targetTags = $targetTags;
  }

  public function getTargetTags()
  {
    return $this->targetTags;
  }
}
