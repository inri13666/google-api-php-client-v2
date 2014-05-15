<?php 
namespace Google\Service\GamesManagement;
class HiddenPlayer extends \Google\Model
{
  public $hiddenTimeMillis;
  public $kind;
  protected $playerType = 'Google\Service\GamesManagement\Player';
  protected $playerDataType = '';

  public function setHiddenTimeMillis($hiddenTimeMillis)
  {
    $this->hiddenTimeMillis = $hiddenTimeMillis;
  }

  public function getHiddenTimeMillis()
  {
    return $this->hiddenTimeMillis;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlayer(\Google\Service\GamesManagement\Player $player)
  {
    $this->player = $player;
  }

  public function getPlayer()
  {
    return $this->player;
  }
}
