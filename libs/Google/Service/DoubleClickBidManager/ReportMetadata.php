<?php 
namespace Google\Service\DoubleClickBidManager;
class ReportMetadata extends \Google\Model
{
  public $googleCloudStoragePath;
  public $reportDataEndTimeMs;
  public $reportDataStartTimeMs;
  protected $statusType = 'Google\Service\DoubleClickBidManager\ReportStatus';
  protected $statusDataType = '';

  public function setGoogleCloudStoragePath($googleCloudStoragePath)
  {
    $this->googleCloudStoragePath = $googleCloudStoragePath;
  }

  public function getGoogleCloudStoragePath()
  {
    return $this->googleCloudStoragePath;
  }

  public function setReportDataEndTimeMs($reportDataEndTimeMs)
  {
    $this->reportDataEndTimeMs = $reportDataEndTimeMs;
  }

  public function getReportDataEndTimeMs()
  {
    return $this->reportDataEndTimeMs;
  }

  public function setReportDataStartTimeMs($reportDataStartTimeMs)
  {
    $this->reportDataStartTimeMs = $reportDataStartTimeMs;
  }

  public function getReportDataStartTimeMs()
  {
    return $this->reportDataStartTimeMs;
  }

  public function setStatus(\Google\Service\DoubleClickBidManager\ReportStatus $status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
