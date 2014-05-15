<?php 
namespace Google\Service\Prediction;
class AnalyzeDataDescriptionFeaturesNumeric extends \Google\Model
{
  public $count;
  public $mean;
  public $variance;

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setMean($mean)
  {
    $this->mean = $mean;
  }

  public function getMean()
  {
    return $this->mean;
  }

  public function setVariance($variance)
  {
    $this->variance = $variance;
  }

  public function getVariance()
  {
    return $this->variance;
  }
}
