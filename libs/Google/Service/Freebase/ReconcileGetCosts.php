<?php 
namespace Google\Service\Freebase;
class ReconcileGetCosts extends \Google\Model
{
  public $hits;
  public $ms;

  public function setHits($hits)
  {
    $this->hits = $hits;
  }

  public function getHits()
  {
    return $this->hits;
  }

  public function setMs($ms)
  {
    $this->ms = $ms;
  }

  public function getMs()
  {
    return $this->ms;
  }
}
