<?php 
namespace Google\Service\Games;
class RoomStatus extends \Google\Collection
{
  protected $autoMatchingStatusType = 'Google\Service\Games\RoomAutoMatchStatus';
  protected $autoMatchingStatusDataType = '';
  public $kind;
  protected $participantsType = 'Google\Service\Games\RoomParticipant';
  protected $participantsDataType = 'array';
  public $roomId;
  public $status;
  public $statusVersion;

  public function setAutoMatchingStatus(\Google\Service\Games\RoomAutoMatchStatus $autoMatchingStatus)
  {
    $this->autoMatchingStatus = $autoMatchingStatus;
  }

  public function getAutoMatchingStatus()
  {
    return $this->autoMatchingStatus;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }

  public function setRoomId($roomId)
  {
    $this->roomId = $roomId;
  }

  public function getRoomId()
  {
    return $this->roomId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setStatusVersion($statusVersion)
  {
    $this->statusVersion = $statusVersion;
  }

  public function getStatusVersion()
  {
    return $this->statusVersion;
  }
}
