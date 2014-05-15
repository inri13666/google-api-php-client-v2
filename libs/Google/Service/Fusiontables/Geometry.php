<?php 
namespace Google\Service\Fusiontables;
class Geometry extends \Google\Collection
{
  public $geometries;
  public $geometry;
  public $type;

  public function setGeometries($geometries)
  {
    $this->geometries = $geometries;
  }

  public function getGeometries()
  {
    return $this->geometries;
  }

  public function setGeometry($geometry)
  {
    $this->geometry = $geometry;
  }

  public function getGeometry()
  {
    return $this->geometry;
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
