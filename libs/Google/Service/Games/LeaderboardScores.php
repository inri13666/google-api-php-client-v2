<?php 
namespace Google\Service\Games;
class LeaderboardScores extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Games\LeaderboardEntry';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $numScores;
  protected $playerScoreType = 'Google\Service\Games\LeaderboardEntry';
  protected $playerScoreDataType = '';
  public $prevPageToken;

  public function setItems($items)
  {
    $this->items = $items;
  }

  public function getItems()
  {
    return $this->items;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setNumScores($numScores)
  {
    $this->numScores = $numScores;
  }

  public function getNumScores()
  {
    return $this->numScores;
  }

  public function setPlayerScore(\Google\Service\Games\LeaderboardEntry $playerScore)
  {
    $this->playerScore = $playerScore;
  }

  public function getPlayerScore()
  {
    return $this->playerScore;
  }

  public function setPrevPageToken($prevPageToken)
  {
    $this->prevPageToken = $prevPageToken;
  }

  public function getPrevPageToken()
  {
    return $this->prevPageToken;
  }
}
