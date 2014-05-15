<?php 
namespace Google\Service\YouTube;
class PlaylistItemSnippet extends \Google\Model
{
  public $channelId;
  public $channelTitle;
  public $description;
  public $playlistId;
  public $position;
  public $publishedAt;
  protected $resourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $resourceIdDataType = '';
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

  public function setChannelTitle($channelTitle)
  {
    $this->channelTitle = $channelTitle;
  }

  public function getChannelTitle()
  {
    return $this->channelTitle;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setPlaylistId($playlistId)
  {
    $this->playlistId = $playlistId;
  }

  public function getPlaylistId()
  {
    return $this->playlistId;
  }

  public function setPosition($position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }

  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }

  public function getPublishedAt()
  {
    return $this->publishedAt;
  }

  public function setResourceId(\Google\Service\YouTube\ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
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
