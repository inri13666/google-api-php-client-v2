<?php 
namespace Google\Service\GamesManagement;
class GamesPlayedResource extends \Google\Model
{
  public $autoMatched;
  public $timeMillis;

  public function setAutoMatched($autoMatched)
  {
    $this->autoMatched = $autoMatched;
  }

  public function getAutoMatched()
  {
    return $this->autoMatched;
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
