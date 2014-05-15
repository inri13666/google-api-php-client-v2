<?php 
namespace Google\Service\QPXExpress;
class PricingInfo extends \Google\Collection
{
  public $baseFareTotal;
  protected $fareType = 'Google\Service\QPXExpress\FareInfo';
  protected $fareDataType = 'array';
  public $fareCalculation;
  public $kind;
  public $latestTicketingTime;
  protected $passengersType = 'Google\Service\QPXExpress\PassengerCounts';
  protected $passengersDataType = '';
  public $ptc;
  public $refundable;
  public $saleFareTotal;
  public $saleTaxTotal;
  public $saleTotal;
  protected $segmentPricingType = 'Google\Service\QPXExpress\SegmentPricing';
  protected $segmentPricingDataType = 'array';
  protected $taxType = 'Google\Service\QPXExpress\TaxInfo';
  protected $taxDataType = 'array';

  public function setBaseFareTotal($baseFareTotal)
  {
    $this->baseFareTotal = $baseFareTotal;
  }

  public function getBaseFareTotal()
  {
    return $this->baseFareTotal;
  }

  public function setFare($fare)
  {
    $this->fare = $fare;
  }

  public function getFare()
  {
    return $this->fare;
  }

  public function setFareCalculation($fareCalculation)
  {
    $this->fareCalculation = $fareCalculation;
  }

  public function getFareCalculation()
  {
    return $this->fareCalculation;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLatestTicketingTime($latestTicketingTime)
  {
    $this->latestTicketingTime = $latestTicketingTime;
  }

  public function getLatestTicketingTime()
  {
    return $this->latestTicketingTime;
  }

  public function setPassengers(\Google\Service\QPXExpress\PassengerCounts $passengers)
  {
    $this->passengers = $passengers;
  }

  public function getPassengers()
  {
    return $this->passengers;
  }

  public function setPtc($ptc)
  {
    $this->ptc = $ptc;
  }

  public function getPtc()
  {
    return $this->ptc;
  }

  public function setRefundable($refundable)
  {
    $this->refundable = $refundable;
  }

  public function getRefundable()
  {
    return $this->refundable;
  }

  public function setSaleFareTotal($saleFareTotal)
  {
    $this->saleFareTotal = $saleFareTotal;
  }

  public function getSaleFareTotal()
  {
    return $this->saleFareTotal;
  }

  public function setSaleTaxTotal($saleTaxTotal)
  {
    $this->saleTaxTotal = $saleTaxTotal;
  }

  public function getSaleTaxTotal()
  {
    return $this->saleTaxTotal;
  }

  public function setSaleTotal($saleTotal)
  {
    $this->saleTotal = $saleTotal;
  }

  public function getSaleTotal()
  {
    return $this->saleTotal;
  }

  public function setSegmentPricing($segmentPricing)
  {
    $this->segmentPricing = $segmentPricing;
  }

  public function getSegmentPricing()
  {
    return $this->segmentPricing;
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
