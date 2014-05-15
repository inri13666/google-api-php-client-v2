<?php 
namespace Google\Service\Bigquery;
class JobConfigurationQuery extends \Google\Model
{
  public $allowLargeResults;
  public $createDisposition;
  protected $defaultDatasetType = 'Google\Service\Bigquery\DatasetReference';
  protected $defaultDatasetDataType = '';
  protected $destinationTableType = 'Google\Service\Bigquery\TableReference';
  protected $destinationTableDataType = '';
  public $flattenResults;
  public $preserveNulls;
  public $priority;
  public $query;
  public $useQueryCache;
  public $writeDisposition;

  public function setAllowLargeResults($allowLargeResults)
  {
    $this->allowLargeResults = $allowLargeResults;
  }

  public function getAllowLargeResults()
  {
    return $this->allowLargeResults;
  }

  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }

  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }

  public function setDefaultDataset(\Google\Service\Bigquery\DatasetReference $defaultDataset)
  {
    $this->defaultDataset = $defaultDataset;
  }

  public function getDefaultDataset()
  {
    return $this->defaultDataset;
  }

  public function setDestinationTable(\Google\Service\Bigquery\TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }

  public function getDestinationTable()
  {
    return $this->destinationTable;
  }

  public function setFlattenResults($flattenResults)
  {
    $this->flattenResults = $flattenResults;
  }

  public function getFlattenResults()
  {
    return $this->flattenResults;
  }

  public function setPreserveNulls($preserveNulls)
  {
    $this->preserveNulls = $preserveNulls;
  }

  public function getPreserveNulls()
  {
    return $this->preserveNulls;
  }

  public function setPriority($priority)
  {
    $this->priority = $priority;
  }

  public function getPriority()
  {
    return $this->priority;
  }

  public function setQuery($query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setUseQueryCache($useQueryCache)
  {
    $this->useQueryCache = $useQueryCache;
  }

  public function getUseQueryCache()
  {
    return $this->useQueryCache;
  }

  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }

  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }
}
