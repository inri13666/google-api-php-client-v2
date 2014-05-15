<?php 
namespace Google\Service\Customsearch;
class ResultImage extends \Google\Model
{
  public $byteSize;
  public $contextLink;
  public $height;
  public $thumbnailHeight;
  public $thumbnailLink;
  public $thumbnailWidth;
  public $width;

  public function setByteSize($byteSize)
  {
    $this->byteSize = $byteSize;
  }

  public function getByteSize()
  {
    return $this->byteSize;
  }

  public function setContextLink($contextLink)
  {
    $this->contextLink = $contextLink;
  }

  public function getContextLink()
  {
    return $this->contextLink;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setThumbnailHeight($thumbnailHeight)
  {
    $this->thumbnailHeight = $thumbnailHeight;
  }

  public function getThumbnailHeight()
  {
    return $this->thumbnailHeight;
  }

  public function setThumbnailLink($thumbnailLink)
  {
    $this->thumbnailLink = $thumbnailLink;
  }

  public function getThumbnailLink()
  {
    return $this->thumbnailLink;
  }

  public function setThumbnailWidth($thumbnailWidth)
  {
    $this->thumbnailWidth = $thumbnailWidth;
  }

  public function getThumbnailWidth()
  {
    return $this->thumbnailWidth;
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
