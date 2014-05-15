<?php 
namespace Google\Service\Bigquery;
class TableList extends \Google\Collection
{
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $tablesType = 'Google\Service\Bigquery\TableListTables';
  protected $tablesDataType = 'array';
  public $totalItems;

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

  public function setTables($tables)
  {
    $this->tables = $tables;
  }

  public function getTables()
  {
    return $this->tables;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
