<?php 
namespace Google\Service\Dfareporting;
class ReportCompatibleFields extends \Google\Collection
{
  protected $dimensionFiltersType = 'Google\Service\Dfareporting\Dimension';
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = 'Google\Service\Dfareporting\Dimension';
  protected $dimensionsDataType = 'array';
  public $kind;
  protected $metricsType = 'Google\Service\Dfareporting\Metric';
  protected $metricsDataType = 'array';
  protected $pivotedActivityMetricsType = 'Google\Service\Dfareporting\Metric';
  protected $pivotedActivityMetricsDataType = 'array';

  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }

  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }

  public function setDimensions($dimensions)
  {
    $this->dimensions = $dimensions;
  }

  public function getDimensions()
  {
    return $this->dimensions;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }

  public function getMetrics()
  {
    return $this->metrics;
  }

  public function setPivotedActivityMetrics($pivotedActivityMetrics)
  {
    $this->pivotedActivityMetrics = $pivotedActivityMetrics;
  }

  public function getPivotedActivityMetrics()
  {
    return $this->pivotedActivityMetrics;
  }
}
