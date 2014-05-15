<?php 
namespace Google\Service\Bigquery;
class DatasetList extends \Google\Collection
{
  protected $datasetsType = 'Google\Service\Bigquery\DatasetListDatasets';
  protected $datasetsDataType = 'array';
  public $etag;
  public $kind;
  public $nextPageToken;

  public function setDatasets($datasets)
  {
    $this->datasets = $datasets;
  }

  public function getDatasets()
  {
    return $this->datasets;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
