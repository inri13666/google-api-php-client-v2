<?php 
namespace Google\Service\Bigquery;
class TableFieldSchema extends \Google\Collection
{
  public $description;
  protected $fieldsType = 'Google\Service\Bigquery\TableFieldSchema';
  protected $fieldsDataType = 'array';
  public $mode;
  public $name;
  public $type;

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }

  public function setMode($mode)
  {
    $this->mode = $mode;
  }

  public function getMode()
  {
    return $this->mode;
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
