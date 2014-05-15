<?php 
namespace Google\Service\Reports;
class UsageReports extends \Google\Collection
{
  public $etag;
  public $kind;
  public $nextPageToken;
  protected $usageReportsType = 'Google\Service\Reports\UsageReport';
  protected $usageReportsDataType = 'array';
  protected $warningsType = 'Google\Service\Reports\UsageReportsWarnings';
  protected $warningsDataType = 'array';

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
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

  public function setUsageReports($usageReports)
  {
    $this->usageReports = $usageReports;
  }

  public function getUsageReports()
  {
    return $this->usageReports;
  }

  public function setWarnings($warnings)
  {
    $this->warnings = $warnings;
  }

  public function getWarnings()
  {
    return $this->warnings;
  }
}
