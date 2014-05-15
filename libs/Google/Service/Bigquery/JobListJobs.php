<?php 
namespace Google\Service\Bigquery;
class JobListJobs extends \Google\Model
{
  protected $configurationType = 'Google\Service\Bigquery\JobConfiguration';
  protected $configurationDataType = '';
  protected $errorResultType = 'Google\Service\Bigquery\ErrorProto';
  protected $errorResultDataType = '';
  public $id;
  protected $jobReferenceType = 'Google\Service\Bigquery\JobReference';
  protected $jobReferenceDataType = '';
  public $kind;
  public $state;
  protected $statisticsType = 'Google\Service\Bigquery\JobStatistics';
  protected $statisticsDataType = '';
  protected $statusType = 'Google\Service\Bigquery\JobStatus';
  protected $statusDataType = '';
  public $userEmail;

  public function setConfiguration(\Google\Service\Bigquery\JobConfiguration $configuration)
  {
    $this->configuration = $configuration;
  }

  public function getConfiguration()
  {
    return $this->configuration;
  }

  public function setErrorResult(\Google\Service\Bigquery\ErrorProto $errorResult)
  {
    $this->errorResult = $errorResult;
  }

  public function getErrorResult()
  {
    return $this->errorResult;
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

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
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

  public function setUserEmail($userEmail)
  {
    $this->userEmail = $userEmail;
  }

  public function getUserEmail()
  {
    return $this->userEmail;
  }
}
