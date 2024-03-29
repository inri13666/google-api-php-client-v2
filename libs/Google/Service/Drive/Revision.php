<?php 
namespace Google\Service\Drive;
class Revision extends \Google\Model
{
  public $downloadUrl;
  public $etag;
  public $exportLinks;
  public $fileSize;
  public $id;
  public $kind;
  protected $lastModifyingUserType = 'Google\Service\Drive\User';
  protected $lastModifyingUserDataType = '';
  public $lastModifyingUserName;
  public $md5Checksum;
  public $mimeType;
  public $modifiedDate;
  public $originalFilename;
  public $pinned;
  public $publishAuto;
  public $published;
  public $publishedLink;
  public $publishedOutsideDomain;
  public $selfLink;

  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }

  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExportLinks($exportLinks)
  {
    $this->exportLinks = $exportLinks;
  }

  public function getExportLinks()
  {
    return $this->exportLinks;
  }

  public function setFileSize($fileSize)
  {
    $this->fileSize = $fileSize;
  }

  public function getFileSize()
  {
    return $this->fileSize;
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

  public function setLastModifyingUser(\Google\Service\Drive\User $lastModifyingUser)
  {
    $this->lastModifyingUser = $lastModifyingUser;
  }

  public function getLastModifyingUser()
  {
    return $this->lastModifyingUser;
  }

  public function setLastModifyingUserName($lastModifyingUserName)
  {
    $this->lastModifyingUserName = $lastModifyingUserName;
  }

  public function getLastModifyingUserName()
  {
    return $this->lastModifyingUserName;
  }

  public function setMd5Checksum($md5Checksum)
  {
    $this->md5Checksum = $md5Checksum;
  }

  public function getMd5Checksum()
  {
    return $this->md5Checksum;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setModifiedDate($modifiedDate)
  {
    $this->modifiedDate = $modifiedDate;
  }

  public function getModifiedDate()
  {
    return $this->modifiedDate;
  }

  public function setOriginalFilename($originalFilename)
  {
    $this->originalFilename = $originalFilename;
  }

  public function getOriginalFilename()
  {
    return $this->originalFilename;
  }

  public function setPinned($pinned)
  {
    $this->pinned = $pinned;
  }

  public function getPinned()
  {
    return $this->pinned;
  }

  public function setPublishAuto($publishAuto)
  {
    $this->publishAuto = $publishAuto;
  }

  public function getPublishAuto()
  {
    return $this->publishAuto;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setPublishedLink($publishedLink)
  {
    $this->publishedLink = $publishedLink;
  }

  public function getPublishedLink()
  {
    return $this->publishedLink;
  }

  public function setPublishedOutsideDomain($publishedOutsideDomain)
  {
    $this->publishedOutsideDomain = $publishedOutsideDomain;
  }

  public function getPublishedOutsideDomain()
  {
    return $this->publishedOutsideDomain;
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
