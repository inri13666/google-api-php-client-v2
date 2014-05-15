<?php 
namespace Google\Service\Games;
class TurnBasedMatchParticipant extends \Google\Model
{
  public $autoMatched;
  protected $autoMatchedPlayerType = 'Google\Service\Games\AnonymousPlayer';
  protected $autoMatchedPlayerDataType = '';
  public $id;
  public $kind;
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
