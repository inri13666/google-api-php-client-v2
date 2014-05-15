<?php 
namespace Google\Service\MapsEngine;
class VectorStyle extends \Google\Collection
{
  protected $displayRulesType = 'Google\Service\MapsEngine\DisplayRule';
  protected $displayRulesDataType = 'array';
  protected $featureInfoType = 'Google\Service\MapsEngine\FeatureInfo';
  protected $featureInfoDataType = '';
  public $type;

  public function setDisplayRules($displayRules)
  {
    $this->displayRules = $displayRules;
  }

  public function getDisplayRules()
  {
    return $this->displayRules;
  }

  public function setFeatureInfo(\Google\Service\MapsEngine\FeatureInfo $featureInfo)
  {
    $this->featureInfo = $featureInfo;
  }

  public function getFeatureInfo()
  {
    return $this->featureInfo;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
