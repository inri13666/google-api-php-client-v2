<?php 
namespace Google\Service\YouTube;
class VideoAgeGating extends \Google\Model
{
  public $alcoholContent;
  public $restricted;
  public $videoGameRating;

  public function setAlcoholContent($alcoholContent)
  {
    $this->alcoholContent = $alcoholContent;
  }

  public function getAlcoholContent()
  {
    return $this->alcoholContent;
  }

  public function setRestricted($restricted)
  {
    $this->restricted = $restricted;
  }

  public function getRestricted()
  {
    return $this->restricted;
  }

  public function setVideoGameRating($videoGameRating)
  {
    $this->videoGameRating = $videoGameRating;
  }

  public function getVideoGameRating()
  {
    return $this->videoGameRating;
  }
}
