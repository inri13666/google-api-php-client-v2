<?php 
namespace Google\Service\Games;
class RoomP2PStatus extends \Google\Model
{
  public $connectionSetupLatencyMillis;
  public $error;
  public $errorReason;
  public $kind;
  public $participantId;
  public $status;
  public $unreliableRoundtripLatencyMillis;

  public function setConnectionSetupLatencyMillis($connectionSetupLatencyMillis)
  {
    $this->connectionSetupLatencyMillis = $connectionSetupLatencyMillis;
  }

  public function getConnectionSetupLatencyMillis()
  {
    return $this->connectionSetupLatencyMillis;
  }

  public function setError($error)
  {
    $this->error = $error;
  }

  public function getError()
  {
    return $this->error;
  }

  public function setErrorReason($errorReason)
  {
    $this->errorReason = $errorReason;
  }

  public function getErrorReason()
  {
    return $this->errorReason;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUnreliableRoundtripLatencyMillis($unreliableRoundtripLatencyMillis)
  {
    $this->unreliableRoundtripLatencyMillis = $unreliableRoundtripLatencyMillis;
  }

  public function getUnreliableRoundtripLatencyMillis()
  {
    return $this->unreliableRoundtripLatencyMillis;
  }
}
