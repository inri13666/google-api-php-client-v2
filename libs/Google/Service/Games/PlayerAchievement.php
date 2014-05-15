<?php 
namespace Google\Service\Games;
class PlayerAchievement extends \Google\Model
{
  public $achievementState;
  public $currentSteps;
  public $formattedCurrentStepsString;
  public $id;
  public $kind;
  public $lastUpdatedTimestamp;

  public function setAchievementState($achievementState)
  {
    $this->achievementState = $achievementState;
  }

  public function getAchievementState()
  {
    return $this->achievementState;
  }

  public function setCurrentSteps($currentSteps)
  {
    $this->currentSteps = $currentSteps;
  }

  public function getCurrentSteps()
  {
    return $this->currentSteps;
  }

  public function setFormattedCurrentStepsString($formattedCurrentStepsString)
  {
    $this->formattedCurrentStepsString = $formattedCurrentStepsString;
  }

  public function getFormattedCurrentStepsString()
  {
    return $this->formattedCurrentStepsString;
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

  public function setLastUpdatedTimestamp($lastUpdatedTimestamp)
  {
    $this->lastUpdatedTimestamp = $lastUpdatedTimestamp;
  }

  public function getLastUpdatedTimestamp()
  {
    return $this->lastUpdatedTimestamp;
  }
}
