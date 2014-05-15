<?php 
namespace Google\Service\DoubleClickBidManager;
class Parameters extends \Google\Collection
{
  protected $filtersType = 'Google\Service\DoubleClickBidManager\FilterPair';
  protected $filtersDataType = 'array';
  public $groupBys;
  public $includeInviteData;
  public $metrics;
  public $type;

  public function setFilters($filters)
  {
    $this->filters = $filters;
  }

  public function getFilters()
  {
    return $this->filters;
  }

  public function setGroupBys($groupBys)
  {
    $this->groupBys = $groupBys;
  }

  public function getGroupBys()
  {
    return $this->groupBys;
  }

  public function setIncludeInviteData($includeInviteData)
  {
    $this->includeInviteData = $includeInviteData;
  }

  public function getIncludeInviteData()
  {
    return $this->includeInviteData;
  }

  public function setMetrics($metrics)
  {
    $this->metrics = $metrics;
  }

  public function getMetrics()
  {
    return $this->metrics;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
