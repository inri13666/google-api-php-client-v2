<?php 
namespace Google\Service\Compute;
class Zone extends \Google\Collection
{
  public $creationTimestamp;
  protected $deprecatedType = 'Google\Service\Compute\DeprecationStatus';
  protected $deprecatedDataType = '';
  public $description;
  public $id;
  public $kind;
  protected $maintenanceWindowsType = 'Google\Service\Compute\ZoneMaintenanceWindows';
  protected $maintenanceWindowsDataType = 'array';
  public $name;
  public $region;
  public $selfLink;
  public $status;

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

  public function setMaintenanceWindows($maintenanceWindows)
  {
    $this->maintenanceWindows = $maintenanceWindows;
  }

  public function getMaintenanceWindows()
  {
    return $this->maintenanceWindows;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
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

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
