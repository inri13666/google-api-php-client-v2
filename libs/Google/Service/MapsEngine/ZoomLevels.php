<?php 
namespace Google\Service\MapsEngine;
class ZoomLevels extends \Google\Model
{
  public $max;
  public $min;

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
