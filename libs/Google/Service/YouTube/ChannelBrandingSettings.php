<?php 
namespace Google\Service\YouTube;
class ChannelBrandingSettings extends \Google\Collection
{
  protected $channelType = 'Google\Service\YouTube\ChannelSettings';
  protected $channelDataType = '';
  protected $hintsType = 'Google\Service\YouTube\PropertyValue';
  protected $hintsDataType = 'array';
  protected $imageType = 'Google\Service\YouTube\ImageSettings';
  protected $imageDataType = '';
  protected $watchType = 'Google\Service\YouTube\WatchSettings';
  protected $watchDataType = '';

  public function setChannel(\Google\Service\YouTube\ChannelSettings $channel)
  {
    $this->channel = $channel;
  }

  public function getChannel()
  {
    return $this->channel;
  }

  public function setHints($hints)
  {
    $this->hints = $hints;
  }

  public function getHints()
  {
    return $this->hints;
  }

  public function setImage(\Google\Service\YouTube\ImageSettings $image)
  {
    $this->image = $image;
  }

  public function getImage()
  {
    return $this->image;
  }

  public function setWatch(\Google\Service\YouTube\WatchSettings $watch)
  {
    $this->watch = $watch;
  }

  public function getWatch()
  {
    return $this->watch;
  }
}
