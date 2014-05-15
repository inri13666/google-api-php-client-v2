<?php 
namespace Google\Service\GamesManagement;
class PlayerScoreResetResponse extends \Google\Collection
{
  public $kind;
  public $resetScoreTimeSpans;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setResetScoreTimeSpans($resetScoreTimeSpans)
  {
    $this->resetScoreTimeSpans = $resetScoreTimeSpans;
  }

  public function getResetScoreTimeSpans()
  {
    return $this->resetScoreTimeSpans;
  }
}
