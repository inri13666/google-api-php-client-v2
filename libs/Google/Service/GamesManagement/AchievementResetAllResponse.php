<?php 
namespace Google\Service\GamesManagement;
class AchievementResetAllResponse extends \Google\Collection
{
  public $kind;
  protected $resultsType = 'Google\Service\GamesManagement\AchievementResetResponse';
  protected $resultsDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }
}
