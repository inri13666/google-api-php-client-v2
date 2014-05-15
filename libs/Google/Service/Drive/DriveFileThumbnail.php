<?php 
namespace Google\Service\Drive;
class DriveFileThumbnail extends \Google\Model
{
  public $image;
  public $mimeType;

  public function setImage($image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getMimeType()
  {
    return $this->mimeType;
  }
}
