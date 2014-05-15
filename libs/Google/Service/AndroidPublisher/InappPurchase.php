<?php 
namespace Google\Service\AndroidPublisher;
class InappPurchase extends \Google\Model
{
  public $consumptionState;
  public $developerPayload;
  public $kind;
  public $purchaseState;
  public $purchaseTime;

  public function setConsumptionState($consumptionState)
  {
    $this->consumptionState = $consumptionState;
  }

  public function getConsumptionState()
  {
    return $this->consumptionState;
  }

  public function setDeveloperPayload($developerPayload)
  {
    $this->developerPayload = $developerPayload;
  }

  public function getDeveloperPayload()
  {
    return $this->developerPayload;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPurchaseState($purchaseState)
  {
    $this->purchaseState = $purchaseState;
  }

  public function getPurchaseState()
  {
    return $this->purchaseState;
  }

  public function setPurchaseTime($purchaseTime)
  {
    $this->purchaseTime = $purchaseTime;
  }

  public function getPurchaseTime()
  {
    return $this->purchaseTime;
  }
}
