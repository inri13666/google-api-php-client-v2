<?php 
namespace Google\Service\MapsEngine;
class Feature extends \Google\Model
{
  protected $geometryType = 'Google\Service\MapsEngine\GeoJsonGeometry';
  protected $geometryDataType = '';
  public $properties;
  public $type;

  public function setGeometry(\Google\Service\MapsEngine\GeoJsonGeometry $geometry)
  {
    $this->geometry = $geometry;
  }

  public function getGeometry()
  {
    return $this->geometry;
  }

  public function setProperties($properties)
  {
    $this->properties = $properties;
  }

  public function getProperties()
  {
    return $this->properties;
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
