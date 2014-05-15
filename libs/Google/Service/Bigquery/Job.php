<?php 
namespace Google\Service\Bigquery;
class Job extends \Google\Model
{
  protected $configurationType = 'Google\Service\Bigquery\JobConfiguration';
  protected $configurationDataType = '';
  public $etag;
  public $id;
  protected $jobReferenceType = 'Google\Service\Bigquery\JobReference';
  protected $jobReferenceDataType = '';
  public $kind;
  public $selfLink;
  protected $statisticsType = 'Google\Service\Bigquery\JobStatistics';
  protected $statisticsDataType = '';
  protected $statusType = 'Google\Service\Bigquery\JobStatus';
  protected $statusDataType = '';

  public function setConfiguration(\Google\Service\Bigquery\JobConfiguration $configuration)
  {
    $this->configuration = $configuration;
  }

  public function getConfiguration()
  {
    return $this->configuration;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setJobReference(\Google\Service\Bigquery\JobReference $jobReference)
  {
    $this->jobReference = $jobReference;
  }

  public function getJobReference()
  {
    return $this->jobReference;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setStatistics(\Google\Service\Bigquery\JobStatistics $statistics)
  {
    $this->statistics = $statistics;
  }

  public function getStatistics()
  {
    return $this->statistics;
  }

  public function setStatus(\Google\Service\Bigquery\JobStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
