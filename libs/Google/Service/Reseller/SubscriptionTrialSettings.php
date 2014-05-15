<?php 
namespace Google\Service\Reseller;
class SubscriptionTrialSettings extends \Google\Model
{
  public $isInTrial;
  public $trialEndTime;

  public function setIsInTrial($isInTrial)
  {
    $this->isInTrial = $isInTrial;
  }

  public function getIsInTrial()
  {
    return $this->isInTrial;
  }

  public function setTrialEndTime($trialEndTime)
  {
    $this->trialEndTime = $trialEndTime;
  }

  public function getTrialEndTime()
  {
    return $this->trialEndTime;
  }
}
