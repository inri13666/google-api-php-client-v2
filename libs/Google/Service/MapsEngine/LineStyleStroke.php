<?php 
namespace Google\Service\MapsEngine;
class LineStyleStroke extends \Google\Model
{
  public $color;
  public $opacity;
  public $width;

  public function setColor($color)
  {
    $this->color = $color;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function setOpacity($opacity)
  {
    $this->opacity = $opacity;
  }

  public function getOpacity()
  {
    return $this->opacity;
  }

  public function setWidth($width)
  {
    $this->width = $width;
  }

  public function getWidth()
  {
    return $this->width;
  }
}
