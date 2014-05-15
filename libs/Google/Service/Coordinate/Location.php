<?php 
namespace Google\Service\Coordinate;
class Location extends \Google\Collection
{
  public $addressLine;
  public $kind;
  public $lat;
  public $lng;

  public function setAddressLine($addressLine)
  {
    $this->addressLine = $addressLine;
  }

  public function getAddressLine()
  {
    return $this->addressLine;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLat($lat)
  {
    $this->lat = $lat;
  }

  public function getLat()
  {
    return $this->lat;
  }

  public function setLng($lng)
  {
    $this->lng = $lng;
  }

  public function getLng()
  {
    return $this->lng;
  }
}
