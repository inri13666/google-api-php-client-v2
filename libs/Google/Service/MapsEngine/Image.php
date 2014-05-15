<?php 
namespace Google\Service\MapsEngine;
class Image extends \Google\Collection
{
  protected $acquisitionTimeType = 'Google\Service\MapsEngine\AcquisitionTime';
  protected $acquisitionTimeDataType = '';
  public $attribution;
  public $bbox;
  public $creationTime;
  public $description;
  public $draftAccessList;
  protected $filesType = 'Google\Service\MapsEngine\MapsengineFile';
  protected $filesDataType = 'array';
  public $id;
  public $lastModifiedTime;
  public $maskType;
  public $name;
  public $processingStatus;
  public $projectId;
  public $rasterType;
  public $tags;

  public function setAcquisitionTime(\Google\Service\MapsEngine\AcquisitionTime $acquisitionTime)
  {
    $this->acquisitionTime = $acquisitionTime;
  }

  public function getAcquisitionTime()
  {
    return $this->acquisitionTime;
  }

  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }

  public function getAttribution()
  {
    return $this->attribution;
  }

  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }

  public function getBbox()
  {
    return $this->bbox;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDraftAccessList($draftAccessList)
  {
    $this->draftAccessList = $draftAccessList;
  }

  public function getDraftAccessList()
  {
    return $this->draftAccessList;
  }

  public function setFiles($files)
  {
    $this->files = $files;
  }

  public function getFiles()
  {
    return $this->files;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }

  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }

  public function setMaskType($maskType)
  {
    $this->maskType = $maskType;
  }

  public function getMaskType()
  {
    return $this->maskType;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setProcessingStatus($processingStatus)
  {
    $this->processingStatus = $processingStatus;
  }

  public function getProcessingStatus()
  {
    return $this->processingStatus;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setRasterType($rasterType)
  {
    $this->rasterType = $rasterType;
  }

  public function getRasterType()
  {
    return $this->rasterType;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }
}
