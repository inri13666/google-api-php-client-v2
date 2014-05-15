<?php 
namespace Google\Service\Compute;
class Quota extends \Google\Model
{
  public $limit;
  public $metric;
  public $usage;

  public function setLimit($limit)
  {
    $this->limit = $limit;
  }

  public function getLimit()
  {
    return $this->limit;
  }

  public function setMetric($metric)
  {
    $this->metric = $metric;
  }

  public function getMetric()
  {
    return $this->metric;
  }

  public function setUsage($usage)
  {
    $this->usage = $usage;
  }

  public function getUsage()
  {
    return $this->usage;
  }
}
