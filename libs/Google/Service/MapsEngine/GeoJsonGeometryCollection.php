<?php 
namespace Google\Service\MapsEngine;
class GeoJsonGeometryCollection extends \Google\Collection
{
  protected $geometriesType = 'Google\Service\MapsEngine\GeoJsonGeometry';
  protected $geometriesDataType = 'array';

  public function setGeometries($geometries)
  {
    $this->geometries = $geometries;
  }

  public function getGeometries()
  {
    return $this->geometries;
  }
}
