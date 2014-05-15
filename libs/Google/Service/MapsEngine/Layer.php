<?php 
namespace Google\Service\MapsEngine;
class Layer extends \Google\Collection
{
  public $bbox;
  public $creationTime;
  public $datasourceType;
  protected $datasourcesType = 'Google\Service\MapsEngine\Datasource';
  protected $datasourcesDataType = 'array';
  public $description;
  public $draftAccessList;
  public $id;
  public $lastModifiedTime;
  public $name;
  public $processingStatus;
  public $projectId;
  public $publishedAccessList;
  protected $styleType = 'Google\Service\MapsEngine\VectorStyle';
  protected $styleDataType = '';
  public $tags;

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

  public function setDatasourceType($datasourceType)
  {
    $this->datasourceType = $datasourceType;
  }

  public function getDatasourceType()
  {
    return $this->datasourceType;
  }

  public function setDatasources($datasources)
  {
    $this->datasources = $datasources;
  }

  public function getDatasources()
  {
    return $this->datasources;
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

  public function setPublishedAccessList($publishedAccessList)
  {
    $this->publishedAccessList = $publishedAccessList;
  }

  public function getPublishedAccessList()
  {
    return $this->publishedAccessList;
  }

  public function setStyle(\Google\Service\MapsEngine\VectorStyle $style)
  {
    $this->style = $style;
  }

  public function getStyle()
  {
    return $this->style;
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
