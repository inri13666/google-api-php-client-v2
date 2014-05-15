<?php 
namespace Google\Service\MapsEngine;
class Map extends \Google\Collection
{
  public $bbox;
  protected $contentsType = 'Google\Service\MapsEngine\MapItem';
  protected $contentsDataType = 'array';
  public $creationTime;
  public $defaultViewport;
  public $description;
  public $draftAccessList;
  public $id;
  public $lastModifiedTime;
  public $name;
  public $projectId;
  public $tags;
  public $versions;

  public function setBbox($bbox)
  {
    $this->bbox = $bbox;
  }

  public function getBbox()
  {
    return $this->bbox;
  }

  public function setContents($contents)
  {
    $this->contents = $contents;
  }

  public function getContents()
  {
    return $this->contents;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDefaultViewport($defaultViewport)
  {
    $this->defaultViewport = $defaultViewport;
  }

  public function getDefaultViewport()
  {
    return $this->defaultViewport;
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

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
  }

  public function setVersions($versions)
  {
    $this->versions = $versions;
  }

  public function getVersions()
  {
    return $this->versions;
  }
}
