<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequestFilters extends \Google\Collection
{
  protected $columnType = 'Google\Service\Doubleclicksearch\ReportRequestFiltersColumn';
  protected $columnDataType = '';
  public $operator;
  public $values;

  public function setColumn(\Google\Service\Doubleclicksearch\ReportRequestFiltersColumn $column)
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

  public function setValues($values)
  {
    $this->values = $values;
  }

  public function getValues()
  {
    return $this->values;
  }
}
