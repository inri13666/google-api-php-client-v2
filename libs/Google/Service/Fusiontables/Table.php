<?php 
namespace Google\Service\Fusiontables;
class Table extends \Google\Collection
{
  public $attribution;
  public $attributionLink;
  public $baseTableIds;
  protected $columnsType = 'Google\Service\Fusiontables\Column';
  protected $columnsDataType = 'array';
  public $description;
  public $isExportable;
  public $kind;
  public $name;
  public $sql;
  public $tableId;

  public function setAttribution($attribution)
  {
    $this->attribution = $attribution;
  }

  public function getAttribution()
  {
    return $this->attribution;
  }

  public function setAttributionLink($attributionLink)
  {
    $this->attributionLink = $attributionLink;
  }

  public function getAttributionLink()
  {
    return $this->attributionLink;
  }

  public function setBaseTableIds($baseTableIds)
  {
    $this->baseTableIds = $baseTableIds;
  }

  public function getBaseTableIds()
  {
    return $this->baseTableIds;
  }

  public function setColumns($columns)
  {
    $this->columns = $columns;
  }

  public function getColumns()
  {
    return $this->columns;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setIsExportable($isExportable)
  {
    $this->isExportable = $isExportable;
  }

  public function getIsExportable()
  {
    return $this->isExportable;
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

  public function setSql($sql)
  {
    $this->sql = $sql;
  }

  public function getSql()
  {
    return $this->sql;
  }

  public function setTableId($tableId)
  {
    $this->tableId = $tableId;
  }

  public function getTableId()
  {
    return $this->tableId;
  }
}
