<?php 
namespace Google\Service\Dfareporting;
class ReportCrossDimensionReachCriteria extends \Google\Collection
{
  protected $breakdownType = 'Google\Service\Dfareporting\SortedDimension';
  protected $breakdownDataType = 'array';
  protected $dateRangeType = 'Google\Service\Dfareporting\DateRange';
  protected $dateRangeDataType = '';
  public $dimension;
  protected $dimensionFiltersType = 'Google\Service\Dfareporting\DimensionValue';
  protected $dimensionFiltersDataType = 'array';
  public $metricNames;
  public $overlapMetricNames;
  public $pivoted;

  public function setBreakdown($breakdown)
  {
    $this->breakdown = $breakdown;
  }

  public function getBreakdown()
  {
    return $this->breakdown;
  }

  public function setDateRange(\Google\Service\Dfareporting\DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }

  public function getDateRange()
  {
    return $this->dateRange;
  }

  public function setDimension($dimension)
  {
    $this->dimension = $dimension;
  }

  public function getDimension()
  {
    return $this->dimension;
  }

  public function setDimensionFilters($dimensionFilters)
  {
    $this->dimensionFilters = $dimensionFilters;
  }

  public function getDimensionFilters()
  {
    return $this->dimensionFilters;
  }

  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }

  public function getMetricNames()
  {
    return $this->metricNames;
  }

  public function setOverlapMetricNames($overlapMetricNames)
  {
    $this->overlapMetricNames = $overlapMetricNames;
  }

  public function getOverlapMetricNames()
  {
    return $this->overlapMetricNames;
  }

  public function setPivoted($pivoted)
  {
    $this->pivoted = $pivoted;
  }

  public function getPivoted()
  {
    return $this->pivoted;
  }
}
