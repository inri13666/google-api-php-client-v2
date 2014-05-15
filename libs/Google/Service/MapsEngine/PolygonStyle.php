<?php 
namespace Google\Service\MapsEngine;
class PolygonStyle extends \Google\Model
{
  protected $fillType = 'Google\Service\MapsEngine\Color';
  protected $fillDataType = '';
  protected $strokeType = 'Google\Service\MapsEngine\Border';
  protected $strokeDataType = '';

  public function setFill(\Google\Service\MapsEngine\Color $fill)
  {
    $this->fill = $fill;
  }

  public function getFill()
  {
    return $this->fill;
  }

  public function setStroke(\Google\Service\MapsEngine\Border $stroke)
  {
    $this->stroke = $stroke;
  }

  public function getStroke()
  {
    return $this->stroke;
  }
}
