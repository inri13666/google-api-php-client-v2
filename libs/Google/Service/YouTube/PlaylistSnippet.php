<?php 
namespace Google\Service\YouTube;
class PlaylistSnippet extends \Google\Collection
{
  public $channelId;
  public $channelTitle;
  public $description;
  public $publishedAt;
  public $tags;
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

  public function setPublishedAt($publishedAt)
  {
    $this->publishedAt = $publishedAt;
  }

  public function getPublishedAt()
  {
    return $this->publishedAt;
  }

  public function setTags($tags)
  {
    $this->tags = $tags;
  }

  public function getTags()
  {
    return $this->tags;
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
