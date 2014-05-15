<?php 
namespace Google\Service\Compute;
class ForwardingRulesScopedList extends \Google\Collection
{
  protected $forwardingRulesType = 'Google\Service\Compute\ForwardingRule';
  protected $forwardingRulesDataType = 'array';
  protected $warningType = 'Google\Service\Compute\ForwardingRulesScopedListWarning';
  protected $warningDataType = '';

  public function setForwardingRules($forwardingRules)
  {
    $this->forwardingRules = $forwardingRules;
  }

  public function getForwardingRules()
  {
    return $this->forwardingRules;
  }

  public function setWarning(\Google\Service\Compute\ForwardingRulesScopedListWarning $warning)
  {
    $this->warning = $warning;
  }

  public function getWarning()
  {
    return $this->warning;
  }
}
