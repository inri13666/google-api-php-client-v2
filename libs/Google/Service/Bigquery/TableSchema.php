<?php 
namespace Google\Service\Bigquery;
class TableSchema extends \Google\Collection
{
  protected $fieldsType = 'Google\Service\Bigquery\TableFieldSchema';
  protected $fieldsDataType = 'array';

  public function setFields($fields)
  {
    $this->fields = $fields;
  }

  public function getFields()
  {
    return $this->fields;
  }
}
