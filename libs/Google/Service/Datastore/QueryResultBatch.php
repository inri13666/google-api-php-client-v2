<?php 
namespace Google\Service\Datastore;
class QueryResultBatch extends \Google\Collection
{
  public $endCursor;
  public $entityResultType;
  protected $entityResultsType = 'Google\Service\Datastore\EntityResult';
  protected $entityResultsDataType = 'array';
  public $moreResults;
  public $skippedResults;

  public function setEndCursor($endCursor)
  {
    $this->endCursor = $endCursor;
  }

  public function getEndCursor()
  {
    return $this->endCursor;
  }

  public function setEntityResultType($entityResultType)
  {
    $this->entityResultType = $entityResultType;
  }

  public function getEntityResultType()
  {
    return $this->entityResultType;
  }

  public function setEntityResults($entityResults)
  {
    $this->entityResults = $entityResults;
  }

  public function getEntityResults()
  {
    return $this->entityResults;
  }

  public function setMoreResults($moreResults)
  {
    $this->moreResults = $moreResults;
  }

  public function getMoreResults()
  {
    return $this->moreResults;
  }

  public function setSkippedResults($skippedResults)
  {
    $this->skippedResults = $skippedResults;
  }

  public function getSkippedResults()
  {
    return $this->skippedResults;
  }
}
