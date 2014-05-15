<?php 
namespace Google\Service\Datastore;
class RunQueryRequest extends \Google\Model
{
  protected $gqlQueryType = 'Google\Service\Datastore\GqlQuery';
  protected $gqlQueryDataType = '';
  protected $partitionIdType = 'Google\Service\Datastore\PartitionId';
  protected $partitionIdDataType = '';
  protected $queryType = 'Google\Service\Datastore\Query';
  protected $queryDataType = '';
  protected $readOptionsType = 'Google\Service\Datastore\ReadOptions';
  protected $readOptionsDataType = '';

  public function setGqlQuery(\Google\Service\Datastore\GqlQuery $gqlQuery)
  {
    $this->gqlQuery = $gqlQuery;
  }

  public function getGqlQuery()
  {
    return $this->gqlQuery;
  }

  public function setPartitionId(\Google\Service\Datastore\PartitionId $partitionId)
  {
    $this->partitionId = $partitionId;
  }

  public function getPartitionId()
  {
    return $this->partitionId;
  }

  public function setQuery(\Google\Service\Datastore\Query $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setReadOptions(\Google\Service\Datastore\ReadOptions $readOptions)
  {
    $this->readOptions = $readOptions;
  }

  public function getReadOptions()
  {
    return $this->readOptions;
  }
}
