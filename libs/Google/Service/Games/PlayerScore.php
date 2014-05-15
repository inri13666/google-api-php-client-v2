<?php 
namespace Google\Service\Games;
class PlayerScore extends \Google\Model
{
  public $formattedScore;
  public $kind;
  public $score;
  public $scoreTag;
  public $timeSpan;

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

  public function setTimeSpan($timeSpan)
  {
    $this->timeSpan = $timeSpan;
  }

  public function getTimeSpan()
  {
    return $this->timeSpan;
  }
}
