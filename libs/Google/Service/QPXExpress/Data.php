<?php 
namespace Google\Service\QPXExpress;
class Data extends \Google\Collection
{
  protected $aircraftType = 'Google\Service\QPXExpress\AircraftData';
  protected $aircraftDataType = 'array';
  protected $airportType = 'Google\Service\QPXExpress\AirportData';
  protected $airportDataType = 'array';
  protected $carrierType = 'Google\Service\QPXExpress\CarrierData';
  protected $carrierDataType = 'array';
  protected $cityType = 'Google\Service\QPXExpress\CityData';
  protected $cityDataType = 'array';
  public $kind;
  protected $taxType = 'Google\Service\QPXExpress\TaxData';
  protected $taxDataType = 'array';

  public function setAircraft($aircraft)
  {
    $this->aircraft = $aircraft;
  }

  public function getAircraft()
  {
    return $this->aircraft;
  }

  public function setAirport($airport)
  {
    $this->airport = $airport;
  }

  public function getAirport()
  {
    return $this->airport;
  }

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setTax($tax)
  {
    $this->tax = $tax;
  }

  public function getTax()
  {
    return $this->tax;
  }
}
