<?php 
namespace Google\Service\Datastore;
class CompositeFilter extends \Google\Collection
{
  protected $filtersType = 'Google\Service\Datastore\Filter';
  protected $filtersDataType = 'array';
  public $operator;

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setOperator($operator)
  {
    $this->operator = $operator;
  }

  public function getOperator()
  {
    return $this->operator;
  }
}
