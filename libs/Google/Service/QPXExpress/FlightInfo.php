<?php 
namespace Google\Service\QPXExpress;
class FlightInfo extends \Google\Model
{
  public $carrier;
  public $number;

  public function setCarrier($carrier)
  {
    $this->carrier = $carrier;
  }

  public function getCarrier()
  {
    return $this->carrier;
  }

  public function setNumber($number)
  {
    $this->number = $number;
  }

  public function getNumber()
  {
    return $this->number;
  }
}
