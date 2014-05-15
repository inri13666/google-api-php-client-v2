<?php 
namespace Google\Service\Dfareporting;
class ReportCriteria extends \Google\Collection
{
  protected $activitiesType = 'Google\Service\Dfareporting\Activities';
  protected $activitiesDataType = '';
  protected $customRichMediaEventsType = 'Google\Service\Dfareporting\CustomRichMediaEvents';
  protected $customRichMediaEventsDataType = '';
  protected $dateRangeType = 'Google\Service\Dfareporting\DateRange';
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = 'Google\Service\Dfareporting\DimensionValue';
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = 'Google\Service\Dfareporting\SortedDimension';
  protected $dimensionsDataType = 'array';
  public $metricNames;

  public function setActivities(\Google\Service\Dfareporting\Activities $activities)
  {
    $this->activities = $activities;
  }

  public function getActivities()
  {
    return $this->activities;
  }

  public function setCustomRichMediaEvents(\Google\Service\Dfareporting\CustomRichMediaEvents $customRichMediaEvents)
  {
    $this->customRichMediaEvents = $customRichMediaEvents;
  }

  public function getCustomRichMediaEvents()
  {
    return $this->customRichMediaEvents;
  }

  public function setDateRange(\Google\Service\Dfareporting\DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }

  public function getDateRange()
  {
    return $this->dateRange;
  }

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

  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }

  public function getMetricNames()
  {
    return $this->metricNames;
  }
}
