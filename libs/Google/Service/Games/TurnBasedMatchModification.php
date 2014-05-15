<?php 
namespace Google\Service\Games;
class TurnBasedMatchModification extends \Google\Model
{
  public $kind;
  public $modifiedTimestampMillis;
  public $participantId;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setModifiedTimestampMillis($modifiedTimestampMillis)
  {
    $this->modifiedTimestampMillis = $modifiedTimestampMillis;
  }

  public function getModifiedTimestampMillis()
  {
    return $this->modifiedTimestampMillis;
  }

  public function setParticipantId($participantId)
  {
    $this->participantId = $participantId;
  }

  public function getParticipantId()
  {
    return $this->participantId;
  }
}
