<?php 
namespace Google\Service\QPXExpress;
class TripsSearchResponse extends \Google\Model
{
  public $kind;
  protected $tripsType = 'Google\Service\QPXExpress\TripOptionsResponse';
  protected $tripsDataType = '';

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTrips(\Google\Service\QPXExpress\TripOptionsResponse $trips)
  {
    $this->trips = $trips;
  }

  public function getTrips()
  {
    return $this->trips;
  }
}
