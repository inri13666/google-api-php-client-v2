<?php 
namespace Google\Service\Games;
class AchievementDefinitionsListResponse extends \Google\Collection
{
  protected $itemsType = 'Google\Service\Games\AchievementDefinition';
  protected $itemsDataType = 'array';
  public $kind;
  public $nextPageToken;

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
}
