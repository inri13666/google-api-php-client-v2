<?php 
namespace Google\Service\GamesManagement;
class AchievementResetResponse extends \Google\Model
{
  public $currentState;
  public $definitionId;
  public $kind;
  public $updateOccurred;

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setDefinitionId($definitionId)
  {
    $this->definitionId = $definitionId;
  }

  public function getDefinitionId()
  {
    return $this->definitionId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdateOccurred($updateOccurred)
  {
    $this->updateOccurred = $updateOccurred;
  }

  public function getUpdateOccurred()
  {
    return $this->updateOccurred;
  }
}
