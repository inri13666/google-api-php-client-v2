<?php 
namespace Google\Service\Fusiontables;
class StyleFunctionGradient extends \Google\Collection
{
  protected $colorsType = 'Google\Service\Fusiontables\StyleFunctionGradientColors';
  protected $colorsDataType = 'array';
  public $max;
  public $min;

  public function setColors($colors)
  {
    $this->colors = $colors;
  }

  public function getColors()
  {
    return $this->colors;
  }

  public function setMax($max)
  {
    $this->max = $max;
  }

  public function getMax()
  {
    return $this->max;
  }

  public function setMin($min)
  {
    $this->min = $min;
  }

  public function getMin()
  {
    return $this->min;
  }
}
