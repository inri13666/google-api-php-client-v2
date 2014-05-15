<?php 
namespace Google\Service\AdExchangeSeller;
class PreferredDeal extends \Google\Model
{
  public $advertiserName;
  public $buyerNetworkName;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $startTime;

  public function setAdvertiserName($advertiserName)
  {
    $this->advertiserName = $advertiserName;
  }

  public function getAdvertiserName()
  {
    return $this->advertiserName;
  }

  public function setBuyerNetworkName($buyerNetworkName)
  {
    $this->buyerNetworkName = $buyerNetworkName;
  }

  public function getBuyerNetworkName()
  {
    return $this->buyerNetworkName;
  }

  public function setCurrencyCode($currencyCode)
  {
    $this->currencyCode = $currencyCode;
  }

  public function getCurrencyCode()
  {
    return $this->currencyCode;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setFixedCpm($fixedCpm)
  {
    $this->fixedCpm = $fixedCpm;
  }

  public function getFixedCpm()
  {
    return $this->fixedCpm;
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

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
  }
}
