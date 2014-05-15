<?php 
namespace Google\Service\YouTube;
class InvideoBranding extends \Google\Model
{
  public $imageBytes;
  public $imageUrl;
  protected $positionType = 'Google\Service\YouTube\InvideoPosition';
  protected $positionDataType = '';
  public $targetChannelId;
  protected $timingType = 'Google\Service\YouTube\InvideoTiming';
  protected $timingDataType = '';

  public function setImageBytes($imageBytes)
  {
    $this->imageBytes = $imageBytes;
  }

  public function getImageBytes()
  {
    return $this->imageBytes;
  }

  public function setImageUrl($imageUrl)
  {
    $this->imageUrl = $imageUrl;
  }

  public function getImageUrl()
  {
    return $this->imageUrl;
  }

  public function setPosition(\Google\Service\YouTube\InvideoPosition $position)
  {
    $this->position = $position;
  }

  public function getPosition()
  {
    return $this->position;
  }

  public function setTargetChannelId($targetChannelId)
  {
    $this->targetChannelId = $targetChannelId;
  }

  public function getTargetChannelId()
  {
    return $this->targetChannelId;
  }

  public function setTiming(\Google\Service\YouTube\InvideoTiming $timing)
  {
    $this->timing = $timing;
  }

  public function getTiming()
  {
    return $this->timing;
  }
}
