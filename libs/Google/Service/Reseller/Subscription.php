<?php 
namespace Google\Service\Reseller;
class Subscription extends \Google\Model
{
  public $creationTime;
  public $customerId;
  public $kind;
  protected $planType = 'Google\Service\Reseller\SubscriptionPlan';
  protected $planDataType = '';
  public $purchaseOrderId;
  protected $renewalSettingsType = 'Google\Service\Reseller\RenewalSettings';
  protected $renewalSettingsDataType = '';
  public $resourceUiUrl;
  protected $seatsType = 'Google\Service\Reseller\Seats';
  protected $seatsDataType = '';
  public $skuId;
  public $status;
  public $subscriptionId;
  protected $transferInfoType = 'Google\Service\Reseller\SubscriptionTransferInfo';
  protected $transferInfoDataType = '';
  protected $trialSettingsType = 'Google\Service\Reseller\SubscriptionTrialSettings';
  protected $trialSettingsDataType = '';

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCustomerId($customerId)
  {
    $this->customerId = $customerId;
  }

  public function getCustomerId()
  {
    return $this->customerId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPlan(\Google\Service\Reseller\SubscriptionPlan $plan)
  {
    $this->plan = $plan;
  }

  public function getPlan()
  {
    return $this->plan;
  }

  public function setPurchaseOrderId($purchaseOrderId)
  {
    $this->purchaseOrderId = $purchaseOrderId;
  }

  public function getPurchaseOrderId()
  {
    return $this->purchaseOrderId;
  }

  public function setRenewalSettings(\Google\Service\Reseller\RenewalSettings $renewalSettings)
  {
    $this->renewalSettings = $renewalSettings;
  }

  public function getRenewalSettings()
  {
    return $this->renewalSettings;
  }

  public function setResourceUiUrl($resourceUiUrl)
  {
    $this->resourceUiUrl = $resourceUiUrl;
  }

  public function getResourceUiUrl()
  {
    return $this->resourceUiUrl;
  }

  public function setSeats(\Google\Service\Reseller\Seats $seats)
  {
    $this->seats = $seats;
  }

  public function getSeats()
  {
    return $this->seats;
  }

  public function setSkuId($skuId)
  {
    $this->skuId = $skuId;
  }

  public function getSkuId()
  {
    return $this->skuId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setSubscriptionId($subscriptionId)
  {
    $this->subscriptionId = $subscriptionId;
  }

  public function getSubscriptionId()
  {
    return $this->subscriptionId;
  }

  public function setTransferInfo(\Google\Service\Reseller\SubscriptionTransferInfo $transferInfo)
  {
    $this->transferInfo = $transferInfo;
  }

  public function getTransferInfo()
  {
    return $this->transferInfo;
  }

  public function setTrialSettings(\Google\Service\Reseller\SubscriptionTrialSettings $trialSettings)
  {
    $this->trialSettings = $trialSettings;
  }

  public function getTrialSettings()
  {
    return $this->trialSettings;
  }
}
