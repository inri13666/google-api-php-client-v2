<?php 
namespace Google\Service\MapsEngine;
class Color extends \Google\Model
{
  public $color;
  public $opacity;

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
}
