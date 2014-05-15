<?php 
namespace Google\Service\QPXExpress;
class TripOption extends \Google\Collection
{
  public $id;
  public $kind;
  protected $pricingType = 'Google\Service\QPXExpress\PricingInfo';
  protected $pricingDataType = 'array';
  public $saleTotal;
  protected $sliceType = 'Google\Service\QPXExpress\SliceInfo';
  protected $sliceDataType = 'array';

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPricing($pricing)
  {
    $this->pricing = $pricing;
  }

  public function getPricing()
  {
    return $this->pricing;
  }

  public function setSaleTotal($saleTotal)
  {
    $this->saleTotal = $saleTotal;
  }

  public function getSaleTotal()
  {
    return $this->saleTotal;
  }

  public function setSlice($slice)
  {
    $this->slice = $slice;
  }

  public function getSlice()
  {
    return $this->slice;
  }
}
