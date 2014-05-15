<?php 
namespace Google\Service\Bigquery;
class TableDataList extends \Google\Collection
{
  public $etag;
  public $kind;
  public $pageToken;
  protected $rowsType = 'Google\Service\Bigquery\TableRow';
  protected $rowsDataType = 'array';
  public $totalRows;

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

  public function setPageToken($pageToken)
  {
    $this->pageToken = $pageToken;
  }

  public function getPageToken()
  {
    return $this->pageToken;
  }

  public function setRows($rows)
  {
    $this->rows = $rows;
  }

  public function getRows()
  {
    return $this->rows;
  }

  public function setTotalRows($totalRows)
  {
    $this->totalRows = $totalRows;
  }

  public function getTotalRows()
  {
    return $this->totalRows;
  }
}
