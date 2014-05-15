<?php 
namespace Google\Service\YouTube;
class VideoFileDetailsAudioStream extends \Google\Model
{
  public $bitrateBps;
  public $channelCount;
  public $codec;
  public $vendor;

  public function setBitrateBps($bitrateBps)
  {
    $this->bitrateBps = $bitrateBps;
  }

  public function getBitrateBps()
  {
    return $this->bitrateBps;
  }

  public function setChannelCount($channelCount)
  {
    $this->channelCount = $channelCount;
  }

  public function getChannelCount()
  {
    return $this->channelCount;
  }

  public function setCodec($codec)
  {
    $this->codec = $codec;
  }

  public function getCodec()
  {
    return $this->codec;
  }

  public function setVendor($vendor)
  {
    $this->vendor = $vendor;
  }

  public function getVendor()
  {
    return $this->vendor;
  }
}
