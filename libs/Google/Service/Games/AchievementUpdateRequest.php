<?php 
namespace Google\Service\Games;
class AchievementUpdateRequest extends \Google\Model
{
  public $achievementId;
  protected $incrementPayloadType = 'Google\Service\Games\GamesAchievementIncrement';
  protected $incrementPayloadDataType = '';
  public $kind;
  protected $setStepsAtLeastPayloadType = 'Google\Service\Games\GamesAchievementSetStepsAtLeast';
  protected $setStepsAtLeastPayloadDataType = '';
  public $updateType;

  public function setAchievementId($achievementId)
  {
    $this->achievementId = $achievementId;
  }

  public function getAchievementId()
  {
    return $this->achievementId;
  }

  public function setIncrementPayload(\Google\Service\Games\GamesAchievementIncrement $incrementPayload)
  {
    $this->incrementPayload = $incrementPayload;
  }

  public function getIncrementPayload()
  {
    return $this->incrementPayload;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSetStepsAtLeastPayload(\Google\Service\Games\GamesAchievementSetStepsAtLeast $setStepsAtLeastPayload)
  {
    $this->setStepsAtLeastPayload = $setStepsAtLeastPayload;
  }

  public function getSetStepsAtLeastPayload()
  {
    return $this->setStepsAtLeastPayload;
  }

  public function setUpdateType($updateType)
  {
    $this->updateType = $updateType;
  }

  public function getUpdateType()
  {
    return $this->updateType;
  }
}
