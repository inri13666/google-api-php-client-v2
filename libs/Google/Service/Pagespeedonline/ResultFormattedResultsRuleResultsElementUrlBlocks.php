<?php 
namespace Google\Service\Pagespeedonline;
class ResultFormattedResultsRuleResultsElementUrlBlocks extends \Google\Collection
{
  protected $headerType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksHeader';
  protected $headerDataType = '';
  protected $urlsType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksUrls';
  protected $urlsDataType = 'array';

  public function setHeader(\Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksHeader $header)
  {
    $this->header = $header;
  }

  public function getHeader()
  {
    return $this->header;
  }

  public function setUrls($urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }
}
