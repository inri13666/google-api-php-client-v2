<?php 
namespace Google\Service\Games;
class GamesAchievementIncrement extends \Google\Model
{
  public $kind;
  public $requestId;
  public $steps;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setSteps($steps)
  {
    $this->steps = $steps;
  }

  public function getSteps()
  {
    return $this->steps;
  }
}
