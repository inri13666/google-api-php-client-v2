<?php 
namespace Google\Service\MapsEngine;
class Filter extends \Google\Model
{
  public $column;
  public $operator;
  public $value;

  public function setColumn($column)
  {
    $this->column = $column;
  }

  public function getColumn()
  {
    return $this->column;
  }

  public function setOperator($operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }

  public function setValue($value)
  {
    $this->value = $value;
  }

  public function getValue()
  {
    return $this->value;
  }
}
