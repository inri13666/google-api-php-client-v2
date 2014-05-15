<?php 
namespace Google\Service\Spectrum;
class GeoLocation extends \Google\Model
{
  public $confidence;
  protected $pointType = 'Google\Service\Spectrum\GeoLocationEllipse';
  protected $pointDataType = '';
  protected $regionType = 'Google\Service\Spectrum\GeoLocationPolygon';
  protected $regionDataType = '';

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }

  public function getConfidence()
  {
    return $this->confidence;
  }

  public function setPoint(\Google\Service\Spectrum\GeoLocationEllipse $point)
  {
    $this->point = $point;
  }

  public function getPoint()
  {
    return $this->point;
  }

  public function setRegion(\Google\Service\Spectrum\GeoLocationPolygon $region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }
}
