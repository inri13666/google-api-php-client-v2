<?php 
namespace Google\Service\YouTube;
class LiveBroadcastStatus extends \Google\Model
{
  public $lifeCycleStatus;
  public $privacyStatus;
  public $recordingStatus;

  public function setLifeCycleStatus($lifeCycleStatus)
  {
    $this->lifeCycleStatus = $lifeCycleStatus;
  }

  public function getLifeCycleStatus()
  {
    return $this->lifeCycleStatus;
  }

  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }

  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }

  public function setRecordingStatus($recordingStatus)
  {
    $this->recordingStatus = $recordingStatus;
  }

  public function getRecordingStatus()
  {
    return $this->recordingStatus;
  }
}
