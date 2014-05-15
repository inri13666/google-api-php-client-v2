<?php 
namespace Google\Service\Games;
class AchievementRevealResponse extends \Google\Model
{
  public $currentState;
  public $kind;

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
