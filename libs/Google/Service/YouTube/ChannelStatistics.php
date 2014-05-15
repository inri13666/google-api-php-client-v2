<?php 
namespace Google\Service\YouTube;
class ChannelStatistics extends \Google\Model
{
  public $commentCount;
  public $hiddenSubscriberCount;
  public $subscriberCount;
  public $videoCount;
  public $viewCount;

  public function setCommentCount($commentCount)
  {
    $this->commentCount = $commentCount;
  }

  public function getCommentCount()
  {
    return $this->commentCount;
  }

  public function setHiddenSubscriberCount($hiddenSubscriberCount)
  {
    $this->hiddenSubscriberCount = $hiddenSubscriberCount;
  }

  public function getHiddenSubscriberCount()
  {
    return $this->hiddenSubscriberCount;
  }

  public function setSubscriberCount($subscriberCount)
  {
    $this->subscriberCount = $subscriberCount;
  }

  public function getSubscriberCount()
  {
    return $this->subscriberCount;
  }

  public function setVideoCount($videoCount)
  {
    $this->videoCount = $videoCount;
  }

  public function getVideoCount()
  {
    return $this->videoCount;
  }

  public function setViewCount($viewCount)
  {
    $this->viewCount = $viewCount;
  }

  public function getViewCount()
  {
    return $this->viewCount;
  }
}
