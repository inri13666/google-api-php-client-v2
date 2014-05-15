<?php 
namespace Google\Service\Games;
class RoomP2PStatuses extends \Google\Collection
{
  public $kind;
  protected $updatesType = 'Google\Service\Games\RoomP2PStatus';
  protected $updatesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setUpdates($updates)
  {
    $this->updates = $updates;
  }

  public function getUpdates()
  {
    return $this->updates;
  }
}
