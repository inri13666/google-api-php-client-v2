<?php 
namespace Google\Service\Drive;
class AboutFeatures extends \Google\Model
{
  public $featureName;
  public $featureRate;

  public function setFeatureName($featureName)
  {
    $this->featureName = $featureName;
  }

  public function getFeatureName()
  {
    return $this->featureName;
  }

  public function setFeatureRate($featureRate)
  {
    $this->featureRate = $featureRate;
  }

  public function getFeatureRate()
  {
    return $this->featureRate;
  }
}
