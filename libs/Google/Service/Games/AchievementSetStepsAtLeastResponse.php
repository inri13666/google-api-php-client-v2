<?php 
namespace Google\Service\Games;
class AchievementSetStepsAtLeastResponse extends \Google\Model
{
  public $currentSteps;
  public $kind;
  public $newlyUnlocked;

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
}
