<?php 
namespace Google\Service\Doubleclicksearch;
class ReportRequestOrderBy extends \Google\Model
{
  protected $columnType = 'Google\Service\Doubleclicksearch\ReportRequestOrderByColumn';
  protected $columnDataType = '';
  public $sortOrder;

  public function setColumn(\Google\Service\Doubleclicksearch\ReportRequestOrderByColumn $column)
  {
    $this->column = $column;
  }

  public function getColumn()
  {
    return $this->column;
  }

  public function setSortOrder($sortOrder)
  {
    $this->sortOrder = $sortOrder;
  }

  public function getSortOrder()
  {
    return $this->sortOrder;
  }
}
