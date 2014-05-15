<?php 
namespace Google\Service\Drive;
class Change extends \Google\Model
{
  public $deleted;
  protected $fileType = 'Google\Service\Drive\DriveFile';
  protected $fileDataType = '';
  public $fileId;
  public $id;
  public $kind;
  public $modificationDate;
  public $selfLink;

  public function setDeleted($deleted)
  {
    $this->deleted = $deleted;
  }

  public function getDeleted()
  {
    return $this->deleted;
  }

  public function setFile(\Google\Service\Drive\DriveFile $file)
  {
    $this->file = $file;
  }

  public function getFile()
  {
    return $this->file;
  }

  public function setFileId($fileId)
  {
    $this->fileId = $fileId;
  }

  public function getFileId()
  {
    return $this->fileId;
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

  public function setModificationDate($modificationDate)
  {
    $this->modificationDate = $modificationDate;
  }

  public function getModificationDate()
  {
    return $this->modificationDate;
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
