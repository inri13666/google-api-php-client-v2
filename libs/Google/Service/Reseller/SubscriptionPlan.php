<?php 
namespace Google\Service\Reseller;
class SubscriptionPlan extends \Google\Model
{
  protected $commitmentIntervalType = 'Google\Service\Reseller\SubscriptionPlanCommitmentInterval';
  protected $commitmentIntervalDataType = '';
  public $isCommitmentPlan;
  public $planName;

  public function setCommitmentInterval(\Google\Service\Reseller\SubscriptionPlanCommitmentInterval $commitmentInterval)
  {
    $this->commitmentInterval = $commitmentInterval;
  }

  public function getCommitmentInterval()
  {
    return $this->commitmentInterval;
  }

  public function setIsCommitmentPlan($isCommitmentPlan)
  {
    $this->isCommitmentPlan = $isCommitmentPlan;
  }

  public function getIsCommitmentPlan()
  {
    return $this->isCommitmentPlan;
  }

  public function setPlanName($planName)
  {
    $this->planName = $planName;
  }

  public function getPlanName()
  {
    return $this->planName;
  }
}
