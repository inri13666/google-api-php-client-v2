<?php 
namespace Google\Service\Games;
class RoomParticipant extends \Google\Collection
{
  public $autoMatched;
  protected $autoMatchedPlayerType = 'Google\Service\Games\AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  public $capabilities;
  protected $clientAddressType = 'Google\Service\Games\RoomClientAddress';
  protected $clientAddressDataType = '';
  public $connected;
  public $id;
  public $kind;
  public $leaveReason;
  protected $playerType = 'Google\Service\Games\Player';
  protected $playerDataType = '';
  public $status;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setAutoMatchedPlayer(\Google\Service\Games\AnonymousPlayer $autoMatchedPlayer)
  {
    $this->autoMatchedPlayer = $autoMatchedPlayer;
  }

  public function getAutoMatchedPlayer()
  {
    return $this->autoMatchedPlayer;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setClientAddress(\Google\Service\Games\RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }

  public function getClientAddress()
  {
    return $this->clientAddress;
  }

  public function setConnected($connected)
  {
    $this->connected = $connected;
  }

  public function getConnected()
  {
    return $this->connected;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaveReason($leaveReason)
  {
    $this->leaveReason = $leaveReason;
  }

  public function getLeaveReason()
  {
    return $this->leaveReason;
  }

  public function setPlayer(\Google\Service\Games\Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
