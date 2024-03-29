<?php 
namespace Google\Service\Analytics;
class GaDataColumnHeaders extends \Google\Model
{
  public $columnType;
  public $dataType;
  public $name;

  public function setColumnType($columnType)
  {
    $this->columnType = $columnType;
  }

  public function getColumnType()
  {
    return $this->columnType;
  }

  public function setDataType($dataType)
  {
    $this->dataType = $dataType;
  }

  public function getDataType()
  {
    return $this->dataType;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }
}
