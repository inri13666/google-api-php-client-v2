<?php 
namespace Google\Service\Games;
class TurnBasedMatchRematch extends \Google\Model
{
  public $kind;
  protected $previousMatchType = 'Google\Service\Games\TurnBasedMatch';
  protected $previousMatchDataType = '';
  protected $rematchType = 'Google\Service\Games\TurnBasedMatch';
  protected $rematchDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPreviousMatch(\Google\Service\Games\TurnBasedMatch $previousMatch)
  {
    $this->previousMatch = $previousMatch;
  }

  public function getPreviousMatch()
  {
    return $this->previousMatch;
  }

  public function setRematch(\Google\Service\Games\TurnBasedMatch $rematch)
  {
    $this->rematch = $rematch;
  }

  public function getRematch()
  {
    return $this->rematch;
  }
}
