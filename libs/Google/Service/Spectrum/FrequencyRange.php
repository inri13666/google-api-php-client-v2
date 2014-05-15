<?php 
namespace Google\Service\Spectrum;
class FrequencyRange extends \Google\Model
{
  public $channelId;
  public $maxPowerDBm;
  public $startHz;
  public $stopHz;

  public function setChannelId($channelId)
  {
    $this->channelId = $channelId;
  }

  public function getChannelId()
  {
    return $this->channelId;
  }

  public function setMaxPowerDBm($maxPowerDBm)
  {
    $this->maxPowerDBm = $maxPowerDBm;
  }

  public function getMaxPowerDBm()
  {
    return $this->maxPowerDBm;
  }

  public function setStartHz($startHz)
  {
    $this->startHz = $startHz;
  }

  public function getStartHz()
  {
    return $this->startHz;
  }

  public function setStopHz($stopHz)
  {
    $this->stopHz = $stopHz;
  }

  public function getStopHz()
  {
    return $this->stopHz;
  }
}
