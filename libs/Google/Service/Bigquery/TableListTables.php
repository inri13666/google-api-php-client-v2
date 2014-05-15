<?php 
namespace Google\Service\Bigquery;
class TableListTables extends \Google\Model
{
  public $friendlyName;
  public $id;
  public $kind;
  protected $tableReferenceType = 'Google\Service\Bigquery\TableReference';
  protected $tableReferenceDataType = '';
  public $type;

  public function setFriendlyName($friendlyName)
  {
    $this->friendlyName = $friendlyName;
  }

  public function getFriendlyName()
  {
    return $this->friendlyName;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTableReference(\Google\Service\Bigquery\TableReference $tableReference)
  {
    $this->tableReference = $tableReference;
  }

  public function getTableReference()
  {
    return $this->tableReference;
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
