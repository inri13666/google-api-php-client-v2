<?php 
namespace Google\Service\Bigquery;
class JobReference extends \Google\Model
{
  public $jobId;
  public $projectId;

  public function setJobId($jobId)
  {
    $this->jobId = $jobId;
  }

  public function getJobId()
  {
    return $this->jobId;
  }

  public function setProjectId($projectId)
  {
    $this->projectId = $projectId;
  }

  public function getProjectId()
  {
    return $this->projectId;
  }
}
