<?php 
namespace Google\Service\Compute;
class MachineType extends \Google\Collection
{
  public $creationTimestamp;
  protected $deprecatedType = 'Google\Service\Compute\DeprecationStatus';
  protected $deprecatedDataType = '';
  public $description;
  public $guestCpus;
  public $id;
  public $imageSpaceGb;
  public $kind;
  public $maximumPersistentDisks;
  public $maximumPersistentDisksSizeGb;
  public $memoryMb;
  public $name;
  protected $scratchDisksType = 'Google\Service\Compute\MachineTypeScratchDisks';
  protected $scratchDisksDataType = 'array';
  public $selfLink;
  public $zone;

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

  public function setGuestCpus($guestCpus)
  {
    $this->guestCpus = $guestCpus;
  }

  public function getGuestCpus()
  {
    return $this->guestCpus;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImageSpaceGb($imageSpaceGb)
  {
    $this->imageSpaceGb = $imageSpaceGb;
  }

  public function getImageSpaceGb()
  {
    return $this->imageSpaceGb;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaximumPersistentDisks($maximumPersistentDisks)
  {
    $this->maximumPersistentDisks = $maximumPersistentDisks;
  }

  public function getMaximumPersistentDisks()
  {
    return $this->maximumPersistentDisks;
  }

  public function setMaximumPersistentDisksSizeGb($maximumPersistentDisksSizeGb)
  {
    $this->maximumPersistentDisksSizeGb = $maximumPersistentDisksSizeGb;
  }

  public function getMaximumPersistentDisksSizeGb()
  {
    return $this->maximumPersistentDisksSizeGb;
  }

  public function setMemoryMb($memoryMb)
  {
    $this->memoryMb = $memoryMb;
  }

  public function getMemoryMb()
  {
    return $this->memoryMb;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setScratchDisks($scratchDisks)
  {
    $this->scratchDisks = $scratchDisks;
  }

  public function getScratchDisks()
  {
    return $this->scratchDisks;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }

  public function getZone()
  {
    return $this->zone;
  }
}
