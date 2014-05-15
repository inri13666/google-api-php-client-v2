<?php 
namespace Google\Service\Compute;
class Region extends \Google\Collection
{
  public $creationTimestamp;
  protected $deprecatedType = 'Google\Service\Compute\DeprecationStatus';
  protected $deprecatedDataType = '';
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $quotasType = 'Google\Service\Compute\Quota';
  protected $quotasDataType = 'array';
  public $selfLink;
  public $status;
  public $zones;

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
  }

  public function setDeprecated(\Google\Service\Compute\DeprecationStatus $deprecated)
  {
    $this->deprecated = $deprecated;
  }

  public function getDeprecated()
  {
    return $this->deprecated;
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

  public function setQuotas($quotas)
  {
    $this->quotas = $quotas;
  }

  public function getQuotas()
  {
    return $this->quotas;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setZones($zones)
  {
    $this->zones = $zones;
  }

  public function getZones()
  {
    return $this->zones;
  }
}
