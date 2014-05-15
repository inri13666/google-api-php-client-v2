<?php 
namespace Google\Service\Drive;
class DriveFileImageMediaMetadataLocation extends \Google\Model
{
  public $altitude;
  public $latitude;
  public $longitude;

  public function setAltitude($altitude)
  {
    $this->altitude = $altitude;
  }

  public function getAltitude()
  {
    return $this->altitude;
  }

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
