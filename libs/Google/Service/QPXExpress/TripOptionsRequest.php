<?php 
namespace Google\Service\QPXExpress;
class TripOptionsRequest extends \Google\Collection
{
  public $maxPrice;
  protected $passengersType = 'Google\Service\QPXExpress\PassengerCounts';
  protected $passengersDataType = '';
  public $refundable;
  public $saleCountry;
  protected $sliceType = 'Google\Service\QPXExpress\SliceInput';
  protected $sliceDataType = 'array';
  public $solutions;

  public function setMaxPrice($maxPrice)
  {
    $this->maxPrice = $maxPrice;
  }

  public function getMaxPrice()
  {
    return $this->maxPrice;
  }

  public function setPassengers(\Google\Service\QPXExpress\PassengerCounts $passengers)
  {
    $this->passengers = $passengers;
  }

  public function getPassengers()
  {
    return $this->passengers;
  }

  public function setRefundable($refundable)
  {
    $this->refundable = $refundable;
  }

  public function getRefundable()
  {
    return $this->refundable;
  }

  public function setSaleCountry($saleCountry)
  {
    $this->saleCountry = $saleCountry;
  }

  public function getSaleCountry()
  {
    return $this->saleCountry;
  }

  public function setSlice($slice)
  {
    $this->slice = $slice;
  }

  public function getSlice()
  {
    return $this->slice;
  }

  public function setSolutions($solutions)
  {
    $this->solutions = $solutions;
  }

  public function getSolutions()
  {
    return $this->solutions;
  }
}
