<?php 
namespace Google\Service\CivicInfo;
class DivisionSearchResponse extends \Google\Collection
{
  public $kind;
  protected $resultsType = 'Google\Service\CivicInfo\DivisionSearchResult';
  protected $resultsDataType = 'array';
  public $status;

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

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
