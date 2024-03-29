<?php 
namespace Google\Service\Storage;
class StorageObject extends \Google\Collection
{
  protected $aclType = 'Google\Service\Storage\ObjectAccessControl';
  protected $aclDataType = 'array';
  public $bucket;
  public $cacheControl;
  public $componentCount;
  public $contentDisposition;
  public $contentEncoding;
  public $contentLanguage;
  public $contentType;
  public $crc32c;
  public $etag;
  public $generation;
  public $id;
  public $kind;
  public $md5Hash;
  public $mediaLink;
  public $metadata;
  public $metageneration;
  public $name;
  protected $ownerType = 'Google\Service\Storage\StorageObjectOwner';
  protected $ownerDataType = '';
  public $selfLink;
  public $size;
  public $storageClass;
  public $timeDeleted;
  public $updated;

  public function setAcl($acl)
  {
    $this->acl = $acl;
  }

  public function getAcl()
  {
    return $this->acl;
  }

  public function setBucket($bucket)
  {
    $this->bucket = $bucket;
  }

  public function getBucket()
  {
    return $this->bucket;
  }

  public function setCacheControl($cacheControl)
  {
    $this->cacheControl = $cacheControl;
  }

  public function getCacheControl()
  {
    return $this->cacheControl;
  }

  public function setComponentCount($componentCount)
  {
    $this->componentCount = $componentCount;
  }

  public function getComponentCount()
  {
    return $this->componentCount;
  }

  public function setContentDisposition($contentDisposition)
  {
    $this->contentDisposition = $contentDisposition;
  }

  public function getContentDisposition()
  {
    return $this->contentDisposition;
  }

  public function setContentEncoding($contentEncoding)
  {
    $this->contentEncoding = $contentEncoding;
  }

  public function getContentEncoding()
  {
    return $this->contentEncoding;
  }

  public function setContentLanguage($contentLanguage)
  {
    $this->contentLanguage = $contentLanguage;
  }

  public function getContentLanguage()
  {
    return $this->contentLanguage;
  }

  public function setContentType($contentType)
  {
    $this->contentType = $contentType;
  }

  public function getContentType()
  {
    return $this->contentType;
  }

  public function setCrc32c($crc32c)
  {
    $this->crc32c = $crc32c;
  }

  public function getCrc32c()
  {
    return $this->crc32c;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setGeneration($generation)
  {
    $this->generation = $generation;
  }

  public function getGeneration()
  {
    return $this->generation;
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

  public function setMd5Hash($md5Hash)
  {
    $this->md5Hash = $md5Hash;
  }

  public function getMd5Hash()
  {
    return $this->md5Hash;
  }

  public function setMediaLink($mediaLink)
  {
    $this->mediaLink = $mediaLink;
  }

  public function getMediaLink()
  {
    return $this->mediaLink;
  }

  public function setMetadata($metadata)
  {
    $this->metadata = $metadata;
  }

  public function getMetadata()
  {
    return $this->metadata;
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

  public function setOwner(\Google\Service\Storage\StorageObjectOwner $owner)
  {
    $this->owner = $owner;
  }

  public function getOwner()
  {
    return $this->owner;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setStorageClass($storageClass)
  {
    $this->storageClass = $storageClass;
  }

  public function getStorageClass()
  {
    return $this->storageClass;
  }

  public function setTimeDeleted($timeDeleted)
  {
    $this->timeDeleted = $timeDeleted;
  }

  public function getTimeDeleted()
  {
    return $this->timeDeleted;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }
}
