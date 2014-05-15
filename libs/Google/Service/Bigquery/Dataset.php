<?php 
namespace Google\Service\Bigquery;
class Dataset extends \Google\Collection
{
  protected $accessType = 'Google\Service\Bigquery\DatasetAccess';
  protected $accessDataType = 'array';
  public $creationTime;
  protected $datasetReferenceType = 'Google\Service\Bigquery\DatasetReference';
  protected $datasetReferenceDataType = '';
  public $description;
  public $etag;
  public $friendlyName;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $selfLink;

  public function setAccess($access)
  {
    $this->access = $access;
  }

  public function getAccess()
  {
    return $this->access;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setDatasetReference(\Google\Service\Bigquery\DatasetReference $datasetReference)
  {
    $this->datasetReference = $datasetReference;
  }

  public function getDatasetReference()
  {
    return $this->datasetReference;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
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

  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }

  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }
}
