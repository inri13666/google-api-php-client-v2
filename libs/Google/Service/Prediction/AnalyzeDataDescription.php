<?php 
namespace Google\Service\Prediction;
class AnalyzeDataDescription extends \Google\Collection
{
  protected $featuresType = 'Google\Service\Prediction\AnalyzeDataDescriptionFeatures';
  protected $featuresDataType = 'array';
  protected $outputFeatureType = 'Google\Service\Prediction\AnalyzeDataDescriptionOutputFeature';
  protected $outputFeatureDataType = '';

  public function setFeatures($features)
  {
    $this->features = $features;
  }

  public function getFeatures()
  {
    return $this->features;
  }

  public function setOutputFeature(\Google\Service\Prediction\AnalyzeDataDescriptionOutputFeature $outputFeature)
  {
    $this->outputFeature = $outputFeature;
  }

  public function getOutputFeature()
  {
    return $this->outputFeature;
  }
}
