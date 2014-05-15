<?php 
namespace Google\Service\Games;
class ScoreSubmission extends \Google\Model
{
  public $kind;
  public $leaderboardId;
  public $score;
  public $scoreTag;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeaderboardId($leaderboardId)
  {
    $this->leaderboardId = $leaderboardId;
  }

  public function getLeaderboardId()
  {
    return $this->leaderboardId;
  }

  public function setScore($score)
  {
    $this->score = $score;
  }

  public function getScore()
  {
    return $this->score;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }
}
