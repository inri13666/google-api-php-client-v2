<?php 
namespace Google\Service\AdExchangeBuyer;
class DirectDeal extends \Google\Model
{
  public $accountId;
  public $advertiser;
  public $currencyCode;
  public $endTime;
  public $fixedCpm;
  public $id;
  public $kind;
  public $name;
  public $privateExchangeMinCpm;
  public $sellerNetwork;
  public $startTime;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setAdvertiser($advertiser)
  {
    $this->advertiser = $advertiser;
  }

  public function getAdvertiser()
  {
    return $this->advertiser;
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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPrivateExchangeMinCpm($privateExchangeMinCpm)
  {
    $this->privateExchangeMinCpm = $privateExchangeMinCpm;
  }

  public function getPrivateExchangeMinCpm()
  {
    return $this->privateExchangeMinCpm;
  }

  public function setSellerNetwork($sellerNetwork)
  {
    $this->sellerNetwork = $sellerNetwork;
  }

  public function getSellerNetwork()
  {
    return $this->sellerNetwork;
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
