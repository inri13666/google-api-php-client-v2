<?php 
namespace Google\Service\Pagespeedonline;
class ResultScreenshot extends \Google\Model
{
  public $data;
  public $height;
  public $mimeType;
  public $width;

  public function setData($data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setHeight($height)
  {
    $this->height = $height;
  }

  public function getHeight()
  {
    return $this->height;
  }

  public function setMimeType($mimeType)
  {
    $this->mimeType = $mimeType;
  }

  public function getMimeType()
  {
    return $this->mimeType;
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
