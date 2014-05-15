<?php 
namespace Google\Service\AdExchangeBuyer;
class DirectDealsList extends \Google\Collection
{
  protected $directDealsType = 'Google\Service\AdExchangeBuyer\DirectDeal';
  protected $directDealsDataType = 'array';
  public $kind;

  public function setDirectDeals($directDeals)
  {
    $this->directDeals = $directDeals;
  }

  public function getDirectDeals()
  {
    return $this->directDeals;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
