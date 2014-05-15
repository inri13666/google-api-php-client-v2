<?php 
namespace Google\Service\YouTube;
class VideoCategorySnippet extends \Google\Model
{
  public $assignable;
  public $channelId;
  public $title;

  public function setAssignable($assignable)
  {
    $this->assignable = $assignable;
  }

  public function getAssignable()
  {
    return $this->assignable;
  }

  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }

  public function getChannelId()
  {
    return $this->channelId;
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
