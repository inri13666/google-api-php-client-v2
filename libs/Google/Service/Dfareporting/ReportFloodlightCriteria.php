<?php 
namespace Google\Service\Dfareporting;
class ReportFloodlightCriteria extends \Google\Collection
{
  protected $customRichMediaEventsType = 'Google\Service\Dfareporting\DimensionValue';
  protected $customRichMediaEventsDataType = 'array';
  protected $dateRangeType = 'Google\Service\Dfareporting\DateRange';
  protected $dateRangeDataType = '';
  protected $dimensionFiltersType = 'Google\Service\Dfareporting\DimensionValue';
  protected $dimensionFiltersDataType = 'array';
  protected $dimensionsType = 'Google\Service\Dfareporting\SortedDimension';
  protected $dimensionsDataType = 'array';
  protected $floodlightConfigIdType = 'Google\Service\Dfareporting\DimensionValue';
  protected $floodlightConfigIdDataType = '';
  public $metricNames;
  protected $reportPropertiesType = 'Google\Service\Dfareporting\ReportFloodlightCriteriaReportProperties';
  protected $reportPropertiesDataType = '';

  public function setCustomRichMediaEvents($customRichMediaEvents)
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

  public function setFloodlightConfigId(\Google\Service\Dfareporting\DimensionValue $floodlightConfigId)
  {
    $this->floodlightConfigId = $floodlightConfigId;
  }

  public function getFloodlightConfigId()
  {
    return $this->floodlightConfigId;
  }

  public function setMetricNames($metricNames)
  {
    $this->metricNames = $metricNames;
  }

  public function getMetricNames()
  {
    return $this->metricNames;
  }

  public function setReportProperties(\Google\Service\Dfareporting\ReportFloodlightCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }

  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}
