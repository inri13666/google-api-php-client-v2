<?php 
namespace Google\Service\Games;
class AchievementUnlockResponse extends \Google\Model
{
  public $kind;
  public $newlyUnlocked;

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
