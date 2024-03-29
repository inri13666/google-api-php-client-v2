<?php 
namespace Google\Service\Games;
class LeaderboardEntry extends \Google\Model
{
  public $formattedScore;
  public $formattedScoreRank;
  public $kind;
  protected $playerType = 'Google\Service\Games\Player';
  protected $playerDataType = '';
  public $scoreRank;
  public $scoreTag;
  public $scoreValue;
  public $timeSpan;
  public $writeTimestampMillis;

  public function setFormattedScore($formattedScore)
  {
    $this->formattedScore = $formattedScore;
  }

  public function getFormattedScore()
  {
    return $this->formattedScore;
  }

  public function setFormattedScoreRank($formattedScoreRank)
  {
    $this->formattedScoreRank = $formattedScoreRank;
  }

  public function getFormattedScoreRank()
  {
    return $this->formattedScoreRank;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayer(\Google\Service\Games\Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }

  public function setScoreRank($scoreRank)
  {
    $this->scoreRank = $scoreRank;
  }

  public function getScoreRank()
  {
    return $this->scoreRank;
  }

  public function setScoreTag($scoreTag)
  {
    $this->scoreTag = $scoreTag;
  }

  public function getScoreTag()
  {
    return $this->scoreTag;
  }

  public function setScoreValue($scoreValue)
  {
    $this->scoreValue = $scoreValue;
  }

  public function getScoreValue()
  {
    return $this->scoreValue;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setWriteTimestampMillis($writeTimestampMillis)
  {
    $this->writeTimestampMillis = $writeTimestampMillis;
  }

  public function getWriteTimestampMillis()
  {
    return $this->writeTimestampMillis;
  }
}
