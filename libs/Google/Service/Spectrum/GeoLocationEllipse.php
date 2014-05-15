<?php 
namespace Google\Service\Spectrum;
class GeoLocationEllipse extends \Google\Model
{
  protected $centerType = 'Google\Service\Spectrum\GeoLocationPoint';
  protected $centerDataType = '';
  public $orientation;
  public $semiMajorAxis;
  public $semiMinorAxis;

  public function setCenter(\Google\Service\Spectrum\GeoLocationPoint $center)
  {
    $this->center = $center;
  }

  public function getCenter()
  {
    return $this->center;
  }

  public function setOrientation($orientation)
  {
    $this->orientation = $orientation;
  }

  public function getOrientation()
  {
    return $this->orientation;
  }

  public function setSemiMajorAxis($semiMajorAxis)
  {
    $this->semiMajorAxis = $semiMajorAxis;
  }

  public function getSemiMajorAxis()
  {
    return $this->semiMajorAxis;
  }

  public function setSemiMinorAxis($semiMinorAxis)
  {
    $this->semiMinorAxis = $semiMinorAxis;
  }

  public function getSemiMinorAxis()
  {
    return $this->semiMinorAxis;
  }
}
