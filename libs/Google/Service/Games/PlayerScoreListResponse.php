<?php 
namespace Google\Service\Games;
class PlayerScoreListResponse extends \Google\Collection
{
  public $kind;
  protected $submittedScoresType = 'Google\Service\Games\PlayerScoreResponse';
  protected $submittedScoresDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSubmittedScores($submittedScores)
  {
    $this->submittedScores = $submittedScores;
  }

  public function getSubmittedScores()
  {
    return $this->submittedScores;
  }
}
