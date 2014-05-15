<?php 
namespace Google\Service\AdExchangeBuyer;
class CreativeFilteringReasons extends \Google\Collection
{
  public $date;
  protected $reasonsType = 'Google\Service\AdExchangeBuyer\CreativeFilteringReasonsReasons';
  protected $reasonsDataType = 'array';

  public function setDate($date)
  {
    $this->date = $date;
  }

  public function getDate()
  {
    return $this->date;
  }

  public function setReasons($reasons)
  {
    $this->reasons = $reasons;
  }

  public function getReasons()
  {
    return $this->reasons;
  }
}
