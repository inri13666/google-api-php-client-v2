<?php 
namespace Google\Service\MapsEngine;
class MapsengineFile extends \Google\Model
{
  public $filename;
  public $size;
  public $uploadStatus;

  public function setFilename($filename)
  {
    $this->filename = $filename;
  }

  public function getFilename()
  {
    return $this->filename;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setUploadStatus($uploadStatus)
  {
    $this->uploadStatus = $uploadStatus;
  }

  public function getUploadStatus()
  {
    return $this->uploadStatus;
  }
}
