<?php 
namespace Google\Service\MapsEngine;
class Table extends \Google\Collection
{
  public $bbox;
  public $creationTime;
  public $description;
  public $draftAccessList;
  protected $filesType = 'Google\Service\MapsEngine\MapsengineFile';
  protected $filesDataType = 'array';
  public $id;
  public $lastModifiedTime;
  public $name;
  public $processingStatus;
  public $projectId;
  public $publishedAccessList;
  protected $schemaType = 'Google\Service\MapsEngine\Schema';
  protected $schemaDataType = '';
  public $sourceEncoding;
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

  public function setSchema(\Google\Service\MapsEngine\Schema $schema)
  {
    $this->schema = $schema;
  }

  public function getSchema()
  {
    return $this->schema;
  }

  public function setSourceEncoding($sourceEncoding)
  {
    $this->sourceEncoding = $sourceEncoding;
  }

  public function getSourceEncoding()
  {
    return $this->sourceEncoding;
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
