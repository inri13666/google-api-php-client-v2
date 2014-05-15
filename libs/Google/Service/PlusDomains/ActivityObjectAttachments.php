<?php 
namespace Google\Service\PlusDomains;
class ActivityObjectAttachments extends \Google\Collection
{
  public $content;
  public $displayName;
  protected $embedType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsEmbed';
  protected $embedDataType = '';
  protected $fullImageType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsFullImage';
  protected $fullImageDataType = '';
  public $id;
  protected $imageType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsImage';
  protected $imageDataType = '';
  public $objectType;
  protected $previewThumbnailsType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsPreviewThumbnails';
  protected $previewThumbnailsDataType = 'array';
  protected $thumbnailsType = 'Google\Service\PlusDomains\ActivityObjectAttachmentsThumbnails';
  protected $thumbnailsDataType = 'array';
  public $url;

  public function setContent($content)
  {
    $this->content = $content;
  }

  public function getContent()
  {
    return $this->content;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setEmbed(\Google\Service\PlusDomains\ActivityObjectAttachmentsEmbed $embed)
  {
    $this->embed = $embed;
  }

  public function getEmbed()
  {
    return $this->embed;
  }

  public function setFullImage(\Google\Service\PlusDomains\ActivityObjectAttachmentsFullImage $fullImage)
  {
    $this->fullImage = $fullImage;
  }

  public function getFullImage()
  {
    return $this->fullImage;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setImage(\Google\Service\PlusDomains\ActivityObjectAttachmentsImage $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setPreviewThumbnails($previewThumbnails)
  {
    $this->previewThumbnails = $previewThumbnails;
  }

  public function getPreviewThumbnails()
  {
    return $this->previewThumbnails;
  }

  public function setThumbnails($thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }

  public function getThumbnails()
  {
    return $this->thumbnails;
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
