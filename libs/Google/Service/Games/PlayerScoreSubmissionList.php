<?php 
namespace Google\Service\Games;
class PlayerScoreSubmissionList extends \Google\Collection
{
  public $kind;
  protected $scoresType = 'Google\Service\Games\ScoreSubmission';
  protected $scoresDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setScores($scores)
  {
    $this->scores = $scores;
  }

  public function getScores()
  {
    return $this->scores;
  }
}
