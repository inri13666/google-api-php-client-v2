<?php 
namespace Google\Service\MapsEngine;
class GeoJsonPoint extends \Google\Collection
{
  public $coordinates;

  public function setCoordinates($coordinates)
  {
    $this->coordinates = $coordinates;
  }

  public function getCoordinates()
  {
    return $this->coordinates;
  }
}
