<?php 
namespace Google\Service\Bigquery;
class JobStatistics extends \Google\Model
{
  public $creationTime;
  public $endTime;
  protected $loadType = 'Google\Service\Bigquery\JobStatistics3';
  protected $loadDataType = '';
  protected $queryType = 'Google\Service\Bigquery\JobStatistics2';
  protected $queryDataType = '';
  public $startTime;
  public $totalBytesProcessed;

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setEndTime($endTime)
  {
    $this->endTime = $endTime;
  }

  public function getEndTime()
  {
    return $this->endTime;
  }

  public function setLoad(\Google\Service\Bigquery\JobStatistics3 $load)
  {
    $this->load = $load;
  }

  public function getLoad()
  {
    return $this->load;
  }

  public function setQuery(\Google\Service\Bigquery\JobStatistics2 $query)
  {
    $this->query = $query;
  }

  public function getQuery()
  {
    return $this->query;
  }

  public function setStartTime($startTime)
  {
    $this->startTime = $startTime;
  }

  public function getStartTime()
  {
    return $this->startTime;
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
