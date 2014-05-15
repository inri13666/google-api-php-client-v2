<?php 
namespace Google\Service\Spectrum;
class GeoLocationPolygon extends \Google\Collection
{
  protected $exteriorType = 'Google\Service\Spectrum\GeoLocationPoint';
  protected $exteriorDataType = 'array';

  public function setExterior($exterior)
  {
    $this->exterior = $exterior;
  }

  public function getExterior()
  {
    return $this->exterior;
  }
}
