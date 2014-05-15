<?php 
namespace Google\Service\YouTube;
class VideoLiveStreamingDetails extends \Google\Model
{
  public $actualEndTime;
  public $actualStartTime;
  public $concurrentViewers;
  public $scheduledEndTime;
  public $scheduledStartTime;

  public function setActualEndTime($actualEndTime)
  {
    $this->actualEndTime = $actualEndTime;
  }

  public function getActualEndTime()
  {
    return $this->actualEndTime;
  }

  public function setActualStartTime($actualStartTime)
  {
    $this->actualStartTime = $actualStartTime;
  }

  public function getActualStartTime()
  {
    return $this->actualStartTime;
  }

  public function setConcurrentViewers($concurrentViewers)
  {
    $this->concurrentViewers = $concurrentViewers;
  }

  public function getConcurrentViewers()
  {
    return $this->concurrentViewers;
  }

  public function setScheduledEndTime($scheduledEndTime)
  {
    $this->scheduledEndTime = $scheduledEndTime;
  }

  public function getScheduledEndTime()
  {
    return $this->scheduledEndTime;
  }

  public function setScheduledStartTime($scheduledStartTime)
  {
    $this->scheduledStartTime = $scheduledStartTime;
  }

  public function getScheduledStartTime()
  {
    return $this->scheduledStartTime;
  }
}
