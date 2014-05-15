<?php 
namespace Google\Service\Fusiontables;
class Column extends \Google\Model
{
  protected $baseColumnType = 'Google\Service\Fusiontables\ColumnBaseColumn';
  protected $baseColumnDataType = '';
  public $columnId;
  public $kind;
  public $name;
  public $type;

  public function setBaseColumn(\Google\Service\Fusiontables\ColumnBaseColumn $baseColumn)
  {
    $this->baseColumn = $baseColumn;
  }

  public function getBaseColumn()
  {
    return $this->baseColumn;
  }

  public function setColumnId($columnId)
  {
    $this->columnId = $columnId;
  }

  public function getColumnId()
  {
    return $this->columnId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
