<?php 
namespace Google\Service\Spectrum;
class GeoLocationPoint extends \Google\Model
{
  public $latitude;
  public $longitude;

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }
}