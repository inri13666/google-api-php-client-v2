<?php 
namespace Google\Service\MapsEngine;
class LineStyle extends \Google\Collection
{
  protected $borderType = 'Google\Service\MapsEngine\Border';
  protected $borderDataType = '';
  public $dash;
  protected $labelType = 'Google\Service\MapsEngine\LabelStyle';
  protected $labelDataType = '';
  protected $strokeType = 'Google\Service\MapsEngine\LineStyleStroke';
  protected $strokeDataType = '';

  public function setBorder(\Google\Service\MapsEngine\Border $border)
  {
    $this->border = $border;
  }

  public function getBorder()
  {
    return $this->border;
  }

  public function setDash($dash)
  {
    $this->dash = $dash;
  }

  public function getDash()
  {
    return $this->dash;
  }

  public function setLabel(\Google\Service\MapsEngine\LabelStyle $label)
  {
    $this->label = $label;
  }

  public function getLabel()
  {
    return $this->label;
  }

  public function setStroke(\Google\Service\MapsEngine\LineStyleStroke $stroke)
  {
    $this->stroke = $stroke;
  }

  public function getStroke()
  {
    return $this->stroke;
  }
}
