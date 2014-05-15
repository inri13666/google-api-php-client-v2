<?php 
namespace Google\Service\Games;
class PeerSessionDiagnostics extends \Google\Model
{
  public $connectedTimestampMillis;
  public $kind;
  public $participantId;
  protected $reliableChannelType = 'Google\Service\Games\PeerChannelDiagnostics';
  protected $reliableChannelDataType = '';
  protected $unreliableChannelType = 'Google\Service\Games\PeerChannelDiagnostics';
  protected $unreliableChannelDataType = '';

  public function setConnectedTimestampMillis($connectedTimestampMillis)
  {
    $this->connectedTimestampMillis = $connectedTimestampMillis;
  }

  public function getConnectedTimestampMillis()
  {
    return $this->connectedTimestampMillis;
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

  public function setReliableChannel(\Google\Service\Games\PeerChannelDiagnostics $reliableChannel)
  {
    $this->reliableChannel = $reliableChannel;
  }

  public function getReliableChannel()
  {
    return $this->reliableChannel;
  }

  public function setUnreliableChannel(\Google\Service\Games\PeerChannelDiagnostics $unreliableChannel)
  {
    $this->unreliableChannel = $unreliableChannel;
  }

  public function getUnreliableChannel()
  {
    return $this->unreliableChannel;
  }
}
