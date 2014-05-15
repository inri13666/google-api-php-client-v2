<?php 
namespace Google\Service\MapsEngine;
class TablesListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $tablesType = 'Google\Service\MapsEngine\Table';
  protected $tablesDataType = 'array';

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
}
