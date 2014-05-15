<?php 
namespace Google\Service\MapsEngine;
class PointStyle extends \Google\Model
{
  protected $iconType = 'Google\Service\MapsEngine\IconStyle';
  protected $iconDataType = '';
  protected $labelType = 'Google\Service\MapsEngine\LabelStyle';
  protected $labelDataType = '';

  public function setIcon(\Google\Service\MapsEngine\IconStyle $icon)
  {
    $this->icon = $icon;
  }

  public function getIcon()
  {
    return $this->icon;
  }

  public function setLabel(\Google\Service\MapsEngine\LabelStyle $label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }
}
