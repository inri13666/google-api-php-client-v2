<?php 
namespace Google\Service\Games;
class ParticipantResult extends \Google\Model
{
  public $kind;
  public $participantId;
  public $placing;
  public $result;

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

  public function setPlacing($placing)
  {
    $this->placing = $placing;
  }

  public function getPlacing()
  {
    return $this->placing;
  }

  public function setResult($result)
  {
    $this->result = $result;
  }

  public function getResult()
  {
    return $this->result;
  }
}
