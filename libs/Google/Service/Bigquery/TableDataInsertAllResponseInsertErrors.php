<?php 
namespace Google\Service\Bigquery;
class TableDataInsertAllResponseInsertErrors extends \Google\Collection
{
  protected $errorsType = 'Google\Service\Bigquery\ErrorProto';
  protected $errorsDataType = 'array';
  public $index;

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }

  public function setIndex($index)
  {
    $this->index = $index;
  }

  public function getIndex()
  {
    return $this->index;
  }
}
