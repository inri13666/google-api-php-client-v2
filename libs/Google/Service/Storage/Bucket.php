<?php 
namespace Google\Service\Storage;
class Bucket extends \Google\Collection
{
  protected $aclType = 'Google\Service\Storage\BucketAccessControl';
  protected $aclDataType = 'array';
  protected $corsType = 'Google\Service\Storage\BucketCors';
  protected $corsDataType = 'array';
  protected $defaultObjectAclType = 'Google\Service\Storage\ObjectAccessControl';
  protected $defaultObjectAclDataType = 'array';
  public $etag;
  public $id;
  public $kind;
  protected $lifecycleType = 'Google\Service\Storage\BucketLifecycle';
  protected $lifecycleDataType = '';
  public $location;
  protected $loggingType = 'Google\Service\Storage\BucketLogging';
  protected $loggingDataType = '';
  public $metageneration;
  public $name;
  protected $ownerType = 'Google\Service\Storage\BucketOwner';
  protected $ownerDataType = '';
  public $projectNumber;
  public $selfLink;
  public $storageClass;
  public $timeCreated;
  protected $versioningType = 'Google\Service\Storage\BucketVersioning';
  protected $versioningDataType = '';
  protected $websiteType = 'Google\Service\Storage\BucketWebsite';
  protected $websiteDataType = '';

  public function setAcl($acl)
  {
    $this->acl = $acl;
  }

  public function getAcl()
  {
    return $this->acl;
  }

  public function setCors($cors)
  {
    $this->cors = $cors;
  }

  public function getCors()
  {
    return $this->cors;
  }

  public function setDefaultObjectAcl($defaultObjectAcl)
  {
    $this->defaultObjectAcl = $defaultObjectAcl;
  }

  public function getDefaultObjectAcl()
  {
    return $this->defaultObjectAcl;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setLifecycle(\Google\Service\Storage\BucketLifecycle $lifecycle)
  {
    $this->lifecycle = $lifecycle;
  }

  public function getLifecycle()
  {
    return $this->lifecycle;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLogging(\Google\Service\Storage\BucketLogging $logging)
  {
    $this->logging = $logging;
  }

  public function getLogging()
  {
    return $this->logging;
  }

  public function setMetageneration($metageneration)
  {
    $this->metageneration = $metageneration;
  }

  public function getMetageneration()
  {
    return $this->metageneration;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOwner(\Google\Service\Storage\BucketOwner $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function setProjectNumber($projectNumber)
  {
    $this->projectNumber = $projectNumber;
  }

  public function getProjectNumber()
  {
    return $this->projectNumber;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }

  public function getStorageClass()
  {
    return $this->storageClass;
  }

  public function setTimeCreated($timeCreated)
  {
    $this->timeCreated = $timeCreated;
  }

  public function getTimeCreated()
  {
    return $this->timeCreated;
  }

  public function setVersioning(\Google\Service\Storage\BucketVersioning $versioning)
  {
    $this->versioning = $versioning;
  }

  public function getVersioning()
  {
    return $this->versioning;
  }

  public function setWebsite(\Google\Service\Storage\BucketWebsite $website)
  {
    $this->website = $website;
  }

  public function getWebsite()
  {
    return $this->website;
  }
}
