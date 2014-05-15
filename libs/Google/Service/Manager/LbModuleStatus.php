<?php 
namespace Google\Service\Manager;
class LbModuleStatus extends \Google\Model
{
  public $forwardingRuleUrl;
  public $targetPoolUrl;

  public function setForwardingRuleUrl($forwardingRuleUrl)
  {
    $this->forwardingRuleUrl = $forwardingRuleUrl;
  }

  public function getForwardingRuleUrl()
  {
    return $this->forwardingRuleUrl;
  }

  public function setTargetPoolUrl($targetPoolUrl)
  {
    $this->targetPoolUrl = $targetPoolUrl;
  }

  public function getTargetPoolUrl()
  {
    return $this->targetPoolUrl;
  }
}
