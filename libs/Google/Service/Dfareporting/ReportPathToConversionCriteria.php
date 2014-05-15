<?php 
namespace Google\Service\Dfareporting;
class ReportPathToConversionCriteria extends \Google\Collection
{
  protected $activityFiltersType = 'Google\Service\Dfareporting\DimensionValue';
  protected $activityFiltersDataType = 'array';
  protected $conversionDimensionsType = 'Google\Service\Dfareporting\SortedDimension';
  protected $conversionDimensionsDataType = 'array';
  protected $customFloodlightVariablesType = 'Google\Service\Dfareporting\SortedDimension';
  protected $customFloodlightVariablesDataType = 'array';
  protected $customRichMediaEventsType = 'Google\Service\Dfareporting\DimensionValue';
  protected $customRichMediaEventsDataType = 'array';
  protected $dateRangeType = 'Google\Service\Dfareporting\DateRange';
  protected $dateRangeDataType = '';
  protected $floodlightConfigIdType = 'Google\Service\Dfareporting\DimensionValue';
  protected $floodlightConfigIdDataType = '';
  public $metricNames;
  protected $perInteractionDimensionsType = 'Google\Service\Dfareporting\SortedDimension';
  protected $perInteractionDimensionsDataType = 'array';
  protected $reportPropertiesType = 'Google\Service\Dfareporting\ReportPathToConversionCriteriaReportProperties';
  protected $reportPropertiesDataType = '';

  public function setActivityFilters($activityFilters)
  {
    $this->activityFilters = $activityFilters;
  }

  public function getActivityFilters()
  {
    return $this->activityFilters;
  }

  public function setConversionDimensions($conversionDimensions)
  {
    $this->conversionDimensions = $conversionDimensions;
  }

  public function getConversionDimensions()
  {
    return $this->conversionDimensions;
  }

  public function setCustomFloodlightVariables($customFloodlightVariables)
  {
    $this->customFloodlightVariables = $customFloodlightVariables;
  }

  public function getCustomFloodlightVariables()
  {
    return $this->customFloodlightVariables;
  }

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

  public function setPerInteractionDimensions($perInteractionDimensions)
  {
    $this->perInteractionDimensions = $perInteractionDimensions;
  }

  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }

  public function setReportProperties(\Google\Service\Dfareporting\ReportPathToConversionCriteriaReportProperties $reportProperties)
  {
    $this->reportProperties = $reportProperties;
  }

  public function getReportProperties()
  {
    return $this->reportProperties;
  }
}
