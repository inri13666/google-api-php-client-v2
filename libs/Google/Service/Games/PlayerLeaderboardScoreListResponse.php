<?php 
namespace Google\Service\Games;
class PlayerLeaderboardScoreListResponse extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Games\PlayerLeaderboardScore';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;
  protected $playerType = 'Google\Service\Games\Player';
  protected $playerDataType = '';

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

  public function setPlayer(\Google\Service\Games\Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }
}
