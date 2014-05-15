<?php 
namespace Google\Service\Bigquery;
class JobStatistics2 extends \Google\Model
{
  public $cacheHit;
  public $totalBytesProcessed;

  public function setCacheHit($cacheHit)
  {
    $this->cacheHit = $cacheHit;
  }

  public function getCacheHit()
  {
    return $this->cacheHit;
  }

  public function setTotalBytesProcessed($totalBytesProcessed)
  {
    $this->totalBytesProcessed = $totalBytesProcessed;
  }

  public function getTotalBytesProcessed()
  {
    return $this->totalBytesProcessed;
  }
}
