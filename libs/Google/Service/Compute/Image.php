<?php 
namespace Google\Service\Compute;
class Image extends \Google\Model
{
  public $archiveSizeBytes;
  public $creationTimestamp;
  protected $deprecatedType = 'Google\Service\Compute\DeprecationStatus';
  protected $deprecatedDataType = '';
  public $description;
  public $diskSizeGb;
  public $id;
  public $kind;
  public $name;
  protected $rawDiskType = 'Google\Service\Compute\ImageRawDisk';
  protected $rawDiskDataType = '';
  public $selfLink;
  public $sourceType;
  public $status;

  public function setArchiveSizeBytes($archiveSizeBytes)
  {
    $this->archiveSizeBytes = $archiveSizeBytes;
  }

  public function getArchiveSizeBytes()
  {
    return $this->archiveSizeBytes;
  }

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

  public function setRawDisk(\Google\Service\Compute\ImageRawDisk $rawDisk)
  {
    $this->rawDisk = $rawDisk;
  }

  public function getRawDisk()
  {
    return $this->rawDisk;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSourceType($sourceType)
  {
    $this->sourceType = $sourceType;
  }

  public function getSourceType()
  {
    return $this->sourceType;
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
