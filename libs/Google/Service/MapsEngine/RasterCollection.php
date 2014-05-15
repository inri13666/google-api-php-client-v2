<?php 
namespace Google\Service\MapsEngine;
class RasterCollection extends \Google\Collection
{
  public $attribution;
  public $bbox;
  public $creationTime;
  public $description;
  public $draftAccessList;
  public $id;
  public $lastModifiedTime;
  public $mosaic;
  public $name;
  public $processingStatus;
  public $projectId;
  public $rasterType;
  public $tags;

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

  public function setMosaic($mosaic)
  {
    $this->mosaic = $mosaic;
  }

  public function getMosaic()
  {
    return $this->mosaic;
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
