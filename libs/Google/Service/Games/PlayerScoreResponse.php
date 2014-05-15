<?php 
namespace Google\Service\Games;
class PlayerScoreResponse extends \Google\Collection
{
  public $beatenScoreTimeSpans;
  public $formattedScore;
  public $kind;
  public $leaderboardId;
  public $scoreTag;
  protected $unbeatenScoresType = 'Google\Service\Games\PlayerScore';
  protected $unbeatenScoresDataType = 'array';

  public function setBeatenScoreTimeSpans($beatenScoreTimeSpans)
  {
    $this->beatenScoreTimeSpans = $beatenScoreTimeSpans;
  }

  public function getBeatenScoreTimeSpans()
  {
    return $this->beatenScoreTimeSpans;
  }

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

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

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setUnbeatenScores($unbeatenScores)
  {
    $this->unbeatenScores = $unbeatenScores;
  }

  public function getUnbeatenScores()
  {
    return $this->unbeatenScores;
  }
}
