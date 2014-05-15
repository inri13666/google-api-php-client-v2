<?php 
namespace Google\Service\Compute;
class Snapshot extends \Google\Model
{
  public $creationTimestamp;
  public $description;
  public $diskSizeGb;
  public $id;
  public $kind;
  public $name;
  public $selfLink;
  public $sourceDisk;
  public $sourceDiskId;
  public $status;
  public $storageBytes;
  public $storageBytesStatus;

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

  public function setDiskSizeGb($diskSizeGb)
  {
    $this->diskSizeGb = $diskSizeGb;
  }

  public function getDiskSizeGb()
  {
    return $this->diskSizeGb;
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

  public function setSourceDisk($sourceDisk)
  {
    $this->sourceDisk = $sourceDisk;
  }

  public function getSourceDisk()
  {
    return $this->sourceDisk;
  }

  public function setSourceDiskId($sourceDiskId)
  {
    $this->sourceDiskId = $sourceDiskId;
  }

  public function getSourceDiskId()
  {
    return $this->sourceDiskId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStorageBytes($storageBytes)
  {
    $this->storageBytes = $storageBytes;
  }

  public function getStorageBytes()
  {
    return $this->storageBytes;
  }

  public function setStorageBytesStatus($storageBytesStatus)
  {
    $this->storageBytesStatus = $storageBytesStatus;
  }

  public function getStorageBytesStatus()
  {
    return $this->storageBytesStatus;
  }
}
