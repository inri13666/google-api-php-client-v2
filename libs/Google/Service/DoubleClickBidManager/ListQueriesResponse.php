<?php 
namespace Google\Service\DoubleClickBidManager;
class ListQueriesResponse extends \Google\Collection
{
  public $kind;
  protected $queriesType = 'Google\Service\DoubleClickBidManager\Query';
  protected $queriesDataType = 'array';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setQueries($queries)
  {
    $this->queries = $queries;
  }

  public function getQueries()
  {
    return $this->queries;
  }
}
