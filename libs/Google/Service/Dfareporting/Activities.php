<?php 
namespace Google\Service\Dfareporting;
class Activities extends \Google\Collection
{
  protected $filtersType = 'Google\Service\Dfareporting\DimensionValue';
  protected $filtersDataType = 'array';
  public $kind;
  public $metricNames;

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }

  public function getMetricNames()
  {
    return $this->metricNames;
  }
}
