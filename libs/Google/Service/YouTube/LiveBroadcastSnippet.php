<?php 
namespace Google\Service\YouTube;
class LiveBroadcastSnippet extends \Google\Model
{
  public $actualEndTime;
  public $actualStartTime;
  public $channelId;
  public $description;
  public $publishedAt;
  public $scheduledEndTime;
  public $scheduledStartTime;
  protected $thumbnailsType = 'Google\Service\YouTube\ThumbnailDetails';
  protected $thumbnailsDataType = '';
  public $title;

  public function setActualEndTime($actualEndTime)
  {
    $this->actualEndTime = $actualEndTime;
  }

  public function getActualEndTime()
  {
    return $this->actualEndTime;
  }

  public function setActualStartTime($actualStartTime)
  {
    $this->actualStartTime = $actualStartTime;
  }

  public function getActualStartTime()
  {
    return $this->actualStartTime;
  }

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

  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }

  public function getPublishedAt()
  {
    return $this->publishedAt;
  }

  public function setScheduledEndTime($scheduledEndTime)
  {
    $this->scheduledEndTime = $scheduledEndTime;
  }

  public function getScheduledEndTime()
  {
    return $this->scheduledEndTime;
  }

  public function setScheduledStartTime($scheduledStartTime)
  {
    $this->scheduledStartTime = $scheduledStartTime;
  }

  public function getScheduledStartTime()
  {
    return $this->scheduledStartTime;
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
