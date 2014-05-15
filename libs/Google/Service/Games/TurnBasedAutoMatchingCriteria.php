<?php 
namespace Google\Service\Games;
class TurnBasedAutoMatchingCriteria extends \Google\Model
{
  public $exclusiveBitmask;
  public $kind;
  public $maxAutoMatchingPlayers;
  public $minAutoMatchingPlayers;

  public function setExclusiveBitmask($exclusiveBitmask)
  {
    $this->exclusiveBitmask = $exclusiveBitmask;
  }

  public function getExclusiveBitmask()
  {
    return $this->exclusiveBitmask;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxAutoMatchingPlayers($maxAutoMatchingPlayers)
  {
    $this->maxAutoMatchingPlayers = $maxAutoMatchingPlayers;
  }

  public function getMaxAutoMatchingPlayers()
  {
    return $this->maxAutoMatchingPlayers;
  }

  public function setMinAutoMatchingPlayers($minAutoMatchingPlayers)
  {
    $this->minAutoMatchingPlayers = $minAutoMatchingPlayers;
  }

  public function getMinAutoMatchingPlayers()
  {
    return $this->minAutoMatchingPlayers;
  }
}
