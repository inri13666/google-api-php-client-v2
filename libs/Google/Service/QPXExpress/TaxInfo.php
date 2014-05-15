<?php 
namespace Google\Service\QPXExpress;
class TaxInfo extends \Google\Model
{
  public $chargeType;
  public $code;
  public $country;
  public $id;
  public $kind;
  public $salePrice;

  public function setChargeType($chargeType)
  {
    $this->chargeType = $chargeType;
  }

  public function getChargeType()
  {
    return $this->chargeType;
  }

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

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

  public function setSalePrice($salePrice)
  {
    $this->salePrice = $salePrice;
  }

  public function getSalePrice()
  {
    return $this->salePrice;
  }
}
