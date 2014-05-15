<?php 
namespace Google\Service\MapsEngine;
class FeaturesBatchPatchRequest extends \Google\Collection
{
  protected $featuresType = 'Google\Service\MapsEngine\Feature';
  protected $featuresDataType = 'array';

  public function setFeatures($features)
  {
    $this->features = $features;
  }

  public function getFeatures()
  {
    return $this->features;
  }
}
