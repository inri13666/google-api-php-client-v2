<?php 
namespace Google\Service\Games;
class Player extends \Google\Model
{
  public $avatarImageUrl;
  public $displayName;
  public $kind;
  protected $lastPlayedWithType = 'Google\Service\Games\Played';
  protected $lastPlayedWithDataType = '';
  protected $nameType = 'Google\Service\Games\PlayerName';
  protected $nameDataType = '';
  public $playerId;

  public function setAvatarImageUrl($avatarImageUrl)
  {
    $this->avatarImageUrl = $avatarImageUrl;
  }

  public function getAvatarImageUrl()
  {
    return $this->avatarImageUrl;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastPlayedWith(\Google\Service\Games\Played $lastPlayedWith)
  {
    $this->lastPlayedWith = $lastPlayedWith;
  }

  public function getLastPlayedWith()
  {
    return $this->lastPlayedWith;
  }

  public function setName(\Google\Service\Games\PlayerName $name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPlayerId($playerId)
  {
    $this->playerId = $playerId;
  }

  public function getPlayerId()
  {
    return $this->playerId;
  }
}
