<?php 
namespace Google\Service\Games;
class AchievementUpdateMultipleRequest extends \Google\Collection
{
  public $kind;
  protected $updatesType = 'Google\Service\Games\AchievementUpdateRequest';
  protected $updatesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }

  public function getUpdates()
  {
    return $this->updates;
  }
}
