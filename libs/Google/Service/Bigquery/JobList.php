<?php 
namespace Google\Service\Bigquery;
class JobList extends \Google\Collection
{
  public $etag;
  protected $jobsType = 'Google\Service\Bigquery\JobListJobs';
  protected $jobsDataType = 'array';
  public $kind;
  public $nextPageToken;
  public $totalItems;

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setJobs($jobs)
  {
    $this->jobs = $jobs;
  }

  public function getJobs()
  {
    return $this->jobs;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setTotalItems($totalItems)
  {
    $this->totalItems = $totalItems;
  }

  public function getTotalItems()
  {
    return $this->totalItems;
  }
}
