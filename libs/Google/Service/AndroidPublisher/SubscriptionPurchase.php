<?php 
namespace Google\Service\AndroidPublisher;
class SubscriptionPurchase extends \Google\Model
{
  public $autoRenewing;
  public $initiationTimestampMsec;
  public $kind;
  public $validUntilTimestampMsec;

  public function setAutoRenewing($autoRenewing)
  {
    $this->autoRenewing = $autoRenewing;
  }

  public function getAutoRenewing()
  {
    return $this->autoRenewing;
  }

  public function setInitiationTimestampMsec($initiationTimestampMsec)
  {
    $this->initiationTimestampMsec = $initiationTimestampMsec;
  }

  public function getInitiationTimestampMsec()
  {
    return $this->initiationTimestampMsec;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setValidUntilTimestampMsec($validUntilTimestampMsec)
  {
    $this->validUntilTimestampMsec = $validUntilTimestampMsec;
  }

  public function getValidUntilTimestampMsec()
  {
    return $this->validUntilTimestampMsec;
  }
}
