<?php 
namespace Google\Service\MapsEngine;
class Schema extends \Google\Collection
{
  protected $columnsType = 'Google\Service\MapsEngine\TableColumn';
  protected $columnsDataType = 'array';
  public $primaryGeometry;
  public $primaryKey;

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setPrimaryGeometry($primaryGeometry)
  {
    $this->primaryGeometry = $primaryGeometry;
  }

  public function getPrimaryGeometry()
  {
    return $this->primaryGeometry;
  }

  public function setPrimaryKey($primaryKey)
  {
    $this->primaryKey = $primaryKey;
  }

  public function getPrimaryKey()
  {
    return $this->primaryKey;
  }
}
