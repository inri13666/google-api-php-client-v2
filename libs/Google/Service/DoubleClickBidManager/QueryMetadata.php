<?php 
namespace Google\Service\DoubleClickBidManager;
class QueryMetadata extends \Google\Collection
{
  public $dataRange;
  public $format;
  public $googleCloudStoragePathForLatestReport;
  public $googleDrivePathForLatestReport;
  public $latestReportRunTimeMs;
  public $reportCount;
  public $running;
  public $sendNotification;
  public $shareEmailAddress;
  public $title;

  public function setDataRange($dataRange)
  {
    $this->dataRange = $dataRange;
  }

  public function getDataRange()
  {
    return $this->dataRange;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setGoogleCloudStoragePathForLatestReport($googleCloudStoragePathForLatestReport)
  {
    $this->googleCloudStoragePathForLatestReport = $googleCloudStoragePathForLatestReport;
  }

  public function getGoogleCloudStoragePathForLatestReport()
  {
    return $this->googleCloudStoragePathForLatestReport;
  }

  public function setGoogleDrivePathForLatestReport($googleDrivePathForLatestReport)
  {
    $this->googleDrivePathForLatestReport = $googleDrivePathForLatestReport;
  }

  public function getGoogleDrivePathForLatestReport()
  {
    return $this->googleDrivePathForLatestReport;
  }

  public function setLatestReportRunTimeMs($latestReportRunTimeMs)
  {
    $this->latestReportRunTimeMs = $latestReportRunTimeMs;
  }

  public function getLatestReportRunTimeMs()
  {
    return $this->latestReportRunTimeMs;
  }

  public function setReportCount($reportCount)
  {
    $this->reportCount = $reportCount;
  }

  public function getReportCount()
  {
    return $this->reportCount;
  }

  public function setRunning($running)
  {
    $this->running = $running;
  }

  public function getRunning()
  {
    return $this->running;
  }

  public function setSendNotification($sendNotification)
  {
    $this->sendNotification = $sendNotification;
  }

  public function getSendNotification()
  {
    return $this->sendNotification;
  }

  public function setShareEmailAddress($shareEmailAddress)
  {
    $this->shareEmailAddress = $shareEmailAddress;
  }

  public function getShareEmailAddress()
  {
    return $this->shareEmailAddress;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getTitle()
  {
    return $this->title;
  }
}
