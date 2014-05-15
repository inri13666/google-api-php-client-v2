<?php 
namespace Google\Service\YouTube;
class LiveBroadcastContentDetails extends \Google\Model
{
  public $boundStreamId;
  public $enableClosedCaptions;
  public $enableContentEncryption;
  public $enableDvr;
  public $enableEmbed;
  protected $monitorStreamType = 'Google\Service\YouTube\MonitorStreamInfo';
  protected $monitorStreamDataType = '';
  public $recordFromStart;
  public $startWithSlate;

  public function setBoundStreamId($boundStreamId)
  {
    $this->boundStreamId = $boundStreamId;
  }

  public function getBoundStreamId()
  {
    return $this->boundStreamId;
  }

  public function setEnableClosedCaptions($enableClosedCaptions)
  {
    $this->enableClosedCaptions = $enableClosedCaptions;
  }

  public function getEnableClosedCaptions()
  {
    return $this->enableClosedCaptions;
  }

  public function setEnableContentEncryption($enableContentEncryption)
  {
    $this->enableContentEncryption = $enableContentEncryption;
  }

  public function getEnableContentEncryption()
  {
    return $this->enableContentEncryption;
  }

  public function setEnableDvr($enableDvr)
  {
    $this->enableDvr = $enableDvr;
  }

  public function getEnableDvr()
  {
    return $this->enableDvr;
  }

  public function setEnableEmbed($enableEmbed)
  {
    $this->enableEmbed = $enableEmbed;
  }

  public function getEnableEmbed()
  {
    return $this->enableEmbed;
  }

  public function setMonitorStream(\Google\Service\YouTube\MonitorStreamInfo $monitorStream)
  {
    $this->monitorStream = $monitorStream;
  }

  public function getMonitorStream()
  {
    return $this->monitorStream;
  }

  public function setRecordFromStart($recordFromStart)
  {
    $this->recordFromStart = $recordFromStart;
  }

  public function getRecordFromStart()
  {
    return $this->recordFromStart;
  }

  public function setStartWithSlate($startWithSlate)
  {
    $this->startWithSlate = $startWithSlate;
  }

  public function getStartWithSlate()
  {
    return $this->startWithSlate;
  }
}
