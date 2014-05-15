<?php 
namespace Google\Service\Games;
class PlayerLeaderboardScore extends \Google\Model
{
  public $kind;
  public $leaderboardId;
  protected $publicRankType = 'Google\Service\Games\LeaderboardScoreRank';
  protected $publicRankDataType = '';
  public $scoreString;
  public $scoreTag;
  public $scoreValue;
  protected $socialRankType = 'Google\Service\Games\LeaderboardScoreRank';
  protected $socialRankDataType = '';
  public $timeSpan;
  public $writeTimestamp;

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

  public function setPublicRank(\Google\Service\Games\LeaderboardScoreRank $publicRank)
  {
    $this->publicRank = $publicRank;
  }

  public function getPublicRank()
  {
    return $this->publicRank;
  }

  public function setScoreString($scoreString)
  {
    $this->scoreString = $scoreString;
  }

  public function getScoreString()
  {
    return $this->scoreString;
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

  public function setSocialRank(\Google\Service\Games\LeaderboardScoreRank $socialRank)
  {
    $this->socialRank = $socialRank;
  }

  public function getSocialRank()
  {
    return $this->socialRank;
  }

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }

  public function setWriteTimestamp($writeTimestamp)
  {
    $this->writeTimestamp = $writeTimestamp;
  }

  public function getWriteTimestamp()
  {
    return $this->writeTimestamp;
  }
}
