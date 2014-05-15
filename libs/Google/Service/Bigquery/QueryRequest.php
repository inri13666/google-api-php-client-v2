<?php 
namespace Google\Service\Bigquery;
class QueryRequest extends \Google\Model
{
  protected $defaultDatasetType = 'Google\Service\Bigquery\DatasetReference';
  protected $defaultDatasetDataType = '';
  public $dryRun;
  public $kind;
  public $maxResults;
  public $preserveNulls;
  public $query;
  public $timeoutMs;
  public $useQueryCache;

  public function setDefaultDataset(\Google\Service\Bigquery\DatasetReference $defaultDataset)
  {
    $this->defaultDataset = $defaultDataset;
  }

  public function getDefaultDataset()
  {
    return $this->defaultDataset;
  }

  public function setDryRun($dryRun)
  {
    $this->dryRun = $dryRun;
  }

  public function getDryRun()
  {
    return $this->dryRun;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxResults($maxResults)
  {
    $this->maxResults = $maxResults;
  }

  public function getMaxResults()
  {
    return $this->maxResults;
  }

  public function setPreserveNulls($preserveNulls)
  {
    $this->preserveNulls = $preserveNulls;
  }

  public function getPreserveNulls()
  {
    return $this->preserveNulls;
  }

  public function setQuery($query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setTimeoutMs($timeoutMs)
  {
    $this->timeoutMs = $timeoutMs;
  }

  public function getTimeoutMs()
  {
    return $this->timeoutMs;
  }

  public function setUseQueryCache($useQueryCache)
  {
    $this->useQueryCache = $useQueryCache;
  }

  public function getUseQueryCache()
  {
    return $this->useQueryCache;
  }
}
