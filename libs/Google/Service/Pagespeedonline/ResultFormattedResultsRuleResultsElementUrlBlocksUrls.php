<?php 
namespace Google\Service\Pagespeedonline;
class ResultFormattedResultsRuleResultsElementUrlBlocksUrls extends \Google\Collection
{
  protected $detailsType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksUrlsDetails';
  protected $detailsDataType = 'array';
  protected $resultType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult';
  protected $resultDataType = '';

  public function setDetails($details)
  {
    $this->details = $details;
  }

  public function getDetails()
  {
    return $this->details;
  }

  public function setResult(\Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksUrlsResult $result)
  {
    $this->result = $result;
  }

  public function getResult()
  {
    return $this->result;
  }
}
