<?php 
namespace Google\Service\YouTube;
class PromotedItemId extends \Google\Model
{
  public $recentlyUploadedBy;
  public $type;
  public $videoId;
  public $websiteUrl;

  public function setRecentlyUploadedBy($recentlyUploadedBy)
  {
    $this->recentlyUploadedBy = $recentlyUploadedBy;
  }

  public function getRecentlyUploadedBy()
  {
    return $this->recentlyUploadedBy;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }

  public function getVideoId()
  {
    return $this->videoId;
  }

  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }

  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}
