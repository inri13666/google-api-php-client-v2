<?php 
namespace Google\Service\Games;
class Played extends \Google\Model
{
  public $autoMatched;
  public $kind;
  public $timeMillis;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTimeMillis($timeMillis)
  {
    $this->timeMillis = $timeMillis;
  }

  public function getTimeMillis()
  {
    return $this->timeMillis;
  }
}
