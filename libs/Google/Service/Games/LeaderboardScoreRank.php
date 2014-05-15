<?php 
namespace Google\Service\Games;
class LeaderboardScoreRank extends \Google\Model
{
  public $formattedNumScores;
  public $formattedRank;
  public $kind;
  public $numScores;
  public $rank;

  public function setFormattedNumScores($formattedNumScores)
  {
    $this->formattedNumScores = $formattedNumScores;
  }

  public function getFormattedNumScores()
  {
    return $this->formattedNumScores;
  }

  public function setFormattedRank($formattedRank)
  {
    $this->formattedRank = $formattedRank;
  }

  public function getFormattedRank()
  {
    return $this->formattedRank;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setRank($rank)
  {
    $this->rank = $rank;
  }

  public function getRank()
  {
    return $this->rank;
  }
}
