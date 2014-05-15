<?php 
namespace Google\Service\Compute;
class UsageExportLocation extends \Google\Model
{
  public $bucketName;
  public $reportNamePrefix;

  public function setBucketName($bucketName)
  {
    $this->bucketName = $bucketName;
  }

  public function getBucketName()
  {
    return $this->bucketName;
  }

  public function setReportNamePrefix($reportNamePrefix)
  {
    $this->reportNamePrefix = $reportNamePrefix;
  }

  public function getReportNamePrefix()
  {
    return $this->reportNamePrefix;
  }
}
