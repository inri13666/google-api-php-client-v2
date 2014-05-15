<?php 
namespace Google\Service\Pagespeedonline;
class ResultFormattedResults extends \Google\Model
{
  public $locale;
  protected $ruleResultsType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElement';
  protected $ruleResultsDataType = 'map';

  public function setLocale($locale)
  {
    $this->locale = $locale;
  }

  public function getLocale()
  {
    return $this->locale;
  }

  public function setRuleResults($ruleResults)
  {
    $this->ruleResults = $ruleResults;
  }

  public function getRuleResults()
  {
    return $this->ruleResults;
  }
}
