<?php 
namespace Google\Service\Games;
class AchievementUpdateResponse extends \Google\Model
{
  public $achievementId;
  public $currentState;
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;
  public $updateOccurred;

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setCurrentState($currentState)
  {
    $this->currentState = $currentState;
  }

  public function getCurrentState()
  {
    return $this->currentState;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNewlyUnlocked($newlyUnlocked)
  {
    $this->newlyUnlocked = $newlyUnlocked;
  }

  public function getNewlyUnlocked()
  {
    return $this->newlyUnlocked;
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
