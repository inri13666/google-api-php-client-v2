<?php 
namespace Google\Service\Dfareporting;
class CrossDimensionReachReportCompatibleFields extends \Google\Collection
{
  protected $breakdownType = 'Google\Service\Dfareporting\Dimension';
  protected $breakdownDataType = 'array';
  protected $dimensionFiltersType = 'Google\Service\Dfareporting\Dimension';
  protected $dimensionFiltersDataType = 'array';
  public $kind;
  protected $metricsType = 'Google\Service\Dfareporting\Metric';
  protected $metricsDataType = 'array';
  protected $overlapMetricsType = 'Google\Service\Dfareporting\Metric';
  protected $overlapMetricsDataType = 'array';

  public function setBreakdown($breakdown)
  {
    $this->breakdown = $breakdown;
  }

  public function getBreakdown()
  {
    return $this->breakdown;
  }

  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }

  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
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

  public function setOverlapMetrics($overlapMetrics)
  {
    $this->overlapMetrics = $overlapMetrics;
  }

  public function getOverlapMetrics()
  {
    return $this->overlapMetrics;
  }
}
