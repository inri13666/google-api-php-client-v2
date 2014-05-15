<?php 
namespace Google\Service\Games;
class AchievementUpdateMultipleResponse extends \Google\Collection
{
  public $kind;
  protected $updatedAchievementsType = 'Google\Service\Games\AchievementUpdateResponse';
  protected $updatedAchievementsDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdatedAchievements($updatedAchievements)
  {
    $this->updatedAchievements = $updatedAchievements;
  }

  public function getUpdatedAchievements()
  {
    return $this->updatedAchievements;
  }
}
