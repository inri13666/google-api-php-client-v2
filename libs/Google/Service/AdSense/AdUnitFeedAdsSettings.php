<?php 
namespace Google\Service\AdSense;
class AdUnitFeedAdsSettings extends \Google\Model
{
  public $adPosition;
  public $frequency;
  public $minimumWordCount;
  public $type;

  public function setAdPosition($adPosition)
  {
    $this->adPosition = $adPosition;
  }

  public function getAdPosition()
  {
    return $this->adPosition;
  }

  public function setFrequency($frequency)
  {
    $this->frequency = $frequency;
  }

  public function getFrequency()
  {
    return $this->frequency;
  }

  public function setMinimumWordCount($minimumWordCount)
  {
    $this->minimumWordCount = $minimumWordCount;
  }

  public function getMinimumWordCount()
  {
    return $this->minimumWordCount;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
