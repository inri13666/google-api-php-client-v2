<?php 
namespace Google\Service\Directory;
class UserPhoto extends \Google\Model
{
  public $etag;
  public $height;
  public $id;
  public $kind;
  public $mimeType;
  public $photoData;
  public $primaryEmail;
  public $width;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
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

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }

  public function setPhotoData($photoData)
  {
    $this->photoData = $photoData;
  }

  public function getPhotoData()
  {
    return $this->photoData;
  }

  public function setPrimaryEmail($primaryEmail)
  {
    $this->primaryEmail = $primaryEmail;
  }

  public function getPrimaryEmail()
  {
    return $this->primaryEmail;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}
