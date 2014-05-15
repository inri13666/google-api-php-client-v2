<?php 
namespace Google\Service\YouTube;
class SubscriptionSubscriberSnippet extends \Google\Model
{
  public $channelId;
  public $description;
  protected $thumbnailsType = 'Google\Service\YouTube\ThumbnailDetails';
  protected $thumbnailsDataType = '';
  public $title;

  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }

  public function getChannelId()
  {
    return $this->channelId;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setThumbnails(\Google\Service\YouTube\ThumbnailDetails $thumbnails)
  {
    $this->thumbnails = $thumbnails;
  }

  public function getThumbnails()
  {
    return $this->thumbnails;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
