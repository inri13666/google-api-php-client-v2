<?php 
namespace Google\Service\YouTube;
class VideoSnippet extends \Google\Collection
{
  public $categoryId;
  public $channelId;
  public $channelTitle;
  public $description;
  public $liveBroadcastContent;
  public $publishedAt;
  public $tags;
  protected $thumbnailsType = 'Google\Service\YouTube\ThumbnailDetails';
  protected $thumbnailsDataType = '';
  public $title;

  public function setCategoryId($categoryId)
  {
    $this->categoryId = $categoryId;
  }

  public function getCategoryId()
  {
    return $this->categoryId;
  }

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

  public function setLiveBroadcastContent($liveBroadcastContent)
  {
    $this->liveBroadcastContent = $liveBroadcastContent;
  }

  public function getLiveBroadcastContent()
  {
    return $this->liveBroadcastContent;
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
