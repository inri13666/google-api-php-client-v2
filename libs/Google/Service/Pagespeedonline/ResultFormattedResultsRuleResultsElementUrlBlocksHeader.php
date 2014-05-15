<?php 
namespace Google\Service\Pagespeedonline;
class ResultFormattedResultsRuleResultsElementUrlBlocksHeader extends \Google\Collection
{
  protected $argsType = 'Google\Service\Pagespeedonline\ResultFormattedResultsRuleResultsElementUrlBlocksHeaderArgs';
  protected $argsDataType = 'array';
  public $format;

  public function setArgs($args)
  {
    $this->args = $args;
  }

  public function getArgs()
  {
    return $this->args;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }
}
