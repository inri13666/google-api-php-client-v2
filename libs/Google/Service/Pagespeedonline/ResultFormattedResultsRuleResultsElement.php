<?php 
namespace Google\Service\Pagespeedonline;
class ResultFormattedResultsRuleResultsElement extends \Google\Collection
{
  public $localizedRuleName;
  public $ruleImpact;
  protected $urlBlocksType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocks';
  protected $urlBlocksDataType = 'array';

  public function setLocalizedRuleName($localizedRuleName)
  {
    $this->localizedRuleName = $localizedRuleName;
  }

  public function getLocalizedRuleName()
  {
    return $this->localizedRuleName;
  }

  public function setRuleImpact($ruleImpact)
  {
    $this->ruleImpact = $ruleImpact;
  }

  public function getRuleImpact()
  {
    return $this->ruleImpact;
  }

  public function setUrlBlocks($urlBlocks)
  {
    $this->urlBlocks = $urlBlocks;
  }

  public function getUrlBlocks()
  {
    return $this->urlBlocks;
  }
}
