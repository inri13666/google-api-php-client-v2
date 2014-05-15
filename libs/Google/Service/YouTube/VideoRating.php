<?php 
namespace Google\Service\YouTube;
class VideoRating extends \Google\Model
{
  public $rating;
  public $videoId;

  public function setRating($rating)
  {
    $this->rating = $rating;
  }

  public function getRating()
  {
    return $this->rating;
  }

  public function setVideoId($videoId)
  {
    $this->videoId = $videoId;
  }

  public function getVideoId()
  {
    return $this->videoId;
  }
}
