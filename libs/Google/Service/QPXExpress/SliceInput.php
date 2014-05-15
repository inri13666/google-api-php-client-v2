<?php 
namespace Google\Service\QPXExpress;
class SliceInput extends \Google\Collection
{
  public $alliance;
  public $date;
  public $destination;
  public $kind;
  public $maxConnectionDuration;
  public $maxStops;
  public $origin;
  public $permittedCarrier;
  protected $permittedDepartureTimeType = 'Google\Service\QPXExpress\TimeOfDayRange';
  protected $permittedDepartureTimeDataType = '';
  public $preferredCabin;
  public $prohibitedCarrier;

  public function setAlliance($alliance)
  {
    $this->alliance = $alliance;
  }

  public function getAlliance()
  {
    return $this->alliance;
  }

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setDestination($destination)
  {
    $this->destination = $destination;
  }

  public function getDestination()
  {
    return $this->destination;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxConnectionDuration($maxConnectionDuration)
  {
    $this->maxConnectionDuration = $maxConnectionDuration;
  }

  public function getMaxConnectionDuration()
  {
    return $this->maxConnectionDuration;
  }

  public function setMaxStops($maxStops)
  {
    $this->maxStops = $maxStops;
  }

  public function getMaxStops()
  {
    return $this->maxStops;
  }

  public function setOrigin($origin)
  {
    $this->origin = $origin;
  }

  public function getOrigin()
  {
    return $this->origin;
  }

  public function setPermittedCarrier($permittedCarrier)
  {
    $this->permittedCarrier = $permittedCarrier;
  }

  public function getPermittedCarrier()
  {
    return $this->permittedCarrier;
  }

  public function setPermittedDepartureTime(\Google\Service\QPXExpress\TimeOfDayRange $permittedDepartureTime)
  {
    $this->permittedDepartureTime = $permittedDepartureTime;
  }

  public function getPermittedDepartureTime()
  {
    return $this->permittedDepartureTime;
  }

  public function setPreferredCabin($preferredCabin)
  {
    $this->preferredCabin = $preferredCabin;
  }

  public function getPreferredCabin()
  {
    return $this->preferredCabin;
  }

  public function setProhibitedCarrier($prohibitedCarrier)
  {
    $this->prohibitedCarrier = $prohibitedCarrier;
  }

  public function getProhibitedCarrier()
  {
    return $this->prohibitedCarrier;
  }
}
