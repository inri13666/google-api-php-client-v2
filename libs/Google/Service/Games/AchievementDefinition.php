<?php 
namespace Google\Service\Games;
class AchievementDefinition extends \Google\Model
{
  public $achievementType;
  public $description;
  public $formattedTotalSteps;
  public $id;
  public $initialState;
  public $isRevealedIconUrlDefault;
  public $isUnlockedIconUrlDefault;
  public $kind;
  public $name;
  public $revealedIconUrl;
  public $totalSteps;
  public $unlockedIconUrl;

  public function setAchievementType($achievementType)
  {
    $this->achievementType = $achievementType;
  }

  public function getAchievementType()
  {
    return $this->achievementType;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setFormattedTotalSteps($formattedTotalSteps)
  {
    $this->formattedTotalSteps = $formattedTotalSteps;
  }

  public function getFormattedTotalSteps()
  {
    return $this->formattedTotalSteps;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInitialState($initialState)
  {
    $this->initialState = $initialState;
  }

  public function getInitialState()
  {
    return $this->initialState;
  }

  public function setIsRevealedIconUrlDefault($isRevealedIconUrlDefault)
  {
    $this->isRevealedIconUrlDefault = $isRevealedIconUrlDefault;
  }

  public function getIsRevealedIconUrlDefault()
  {
    return $this->isRevealedIconUrlDefault;
  }

  public function setIsUnlockedIconUrlDefault($isUnlockedIconUrlDefault)
  {
    $this->isUnlockedIconUrlDefault = $isUnlockedIconUrlDefault;
  }

  public function getIsUnlockedIconUrlDefault()
  {
    return $this->isUnlockedIconUrlDefault;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setRevealedIconUrl($revealedIconUrl)
  {
    $this->revealedIconUrl = $revealedIconUrl;
  }

  public function getRevealedIconUrl()
  {
    return $this->revealedIconUrl;
  }

  public function setTotalSteps($totalSteps)
  {
    $this->totalSteps = $totalSteps;
  }

  public function getTotalSteps()
  {
    return $this->totalSteps;
  }

  public function setUnlockedIconUrl($unlockedIconUrl)
  {
    $this->unlockedIconUrl = $unlockedIconUrl;
  }

  public function getUnlockedIconUrl()
  {
    return $this->unlockedIconUrl;
  }
}
