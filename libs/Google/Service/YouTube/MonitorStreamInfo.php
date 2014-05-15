<?php 
namespace Google\Service\YouTube;
class MonitorStreamInfo extends \Google\Model
{
  public $broadcastStreamDelayMs;
  public $embedHtml;
  public $enableMonitorStream;

  public function setBroadcastStreamDelayMs($broadcastStreamDelayMs)
  {
    $this->broadcastStreamDelayMs = $broadcastStreamDelayMs;
  }

  public function getBroadcastStreamDelayMs()
  {
    return $this->broadcastStreamDelayMs;
  }

  public function setEmbedHtml($embedHtml)
  {
    $this->embedHtml = $embedHtml;
  }

  public function getEmbedHtml()
  {
    return $this->embedHtml;
  }

  public function setEnableMonitorStream($enableMonitorStream)
  {
    $this->enableMonitorStream = $enableMonitorStream;
  }

  public function getEnableMonitorStream()
  {
    return $this->enableMonitorStream;
  }
}
