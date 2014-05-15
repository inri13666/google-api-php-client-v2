<?php 
namespace Google\Service\Dfareporting;
class PathToConversionReportCompatibleFields extends \Google\Collection
{
  protected $conversionDimensionsType = 'Google\Service\Dfareporting\Dimension';
  protected $conversionDimensionsDataType = 'array';
  protected $customFloodlightVariablesType = 'Google\Service\Dfareporting\Dimension';
  protected $customFloodlightVariablesDataType = 'array';
  public $kind;
  protected $metricsType = 'Google\Service\Dfareporting\Metric';
  protected $metricsDataType = 'array';
  protected $perInteractionDimensionsType = 'Google\Service\Dfareporting\Dimension';
  protected $perInteractionDimensionsDataType = 'array';

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

  public function setPerInteractionDimensions($perInteractionDimensions)
  {
    $this->perInteractionDimensions = $perInteractionDimensions;
  }

  public function getPerInteractionDimensions()
  {
    return $this->perInteractionDimensions;
  }
}
