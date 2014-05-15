<?php 
namespace Google\Service\Fusiontables;
class ColumnBaseColumn extends \Google\Model
{
  public $columnId;
  public $tableIndex;

  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }

  public function getColumnId()
  {
    return $this->columnId;
  }

  public function setTableIndex($tableIndex)
  {
    $this->tableIndex = $tableIndex;
  }

  public function getTableIndex()
  {
    return $this->tableIndex;
  }
}
