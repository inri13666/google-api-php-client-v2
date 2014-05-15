<?php 
namespace Google\Service\PlusDomains;
class ActivityObjectAttachmentsThumbnails extends \Google\Model
{
  public $description;
  protected $imageType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsThumbnailsImage';
  protected $imageDataType = '';
  public $url;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setImage(\Google\Service\PlusDomains\ActivityObjectAttachmentsThumbnailsImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setUrl($url)
  {
    $this->url = $url;
  }

  public function getUrl()
  {
    return $this->url;
  }
}
