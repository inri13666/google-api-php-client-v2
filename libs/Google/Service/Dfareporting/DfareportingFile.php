<?php 
namespace Google\Service\Dfareporting;
class DfareportingFile extends \Google\Model
{
  protected $dateRangeType = 'Google\Service\Dfareporting\DateRange';
  protected $dateRangeDataType = '';
  public $etag;
  public $fileName;
  public $format;
  public $id;
  public $kind;
  public $lastModifiedTime;
  public $reportId;
  public $status;
  protected $urlsType = 'Google\Service\Dfareporting\DfareportingFileUrls';
  protected $urlsDataType = '';

  public function setDateRange(\Google\Service\Dfareporting\DateRange $dateRange)
  {
    $this->dateRange = $dateRange;
  }

  public function getDateRange()
  {
    return $this->dateRange;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setFileName($fileName)
  {
    $this->fileName = $fileName;
  }

  public function getFileName()
  {
    return $this->fileName;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastModifiedTime($lastModifiedTime)
  {
    $this->lastModifiedTime = $lastModifiedTime;
  }

  public function getLastModifiedTime()
  {
    return $this->lastModifiedTime;
  }

  public function setReportId($reportId)
  {
    $this->reportId = $reportId;
  }

  public function getReportId()
  {
    return $this->reportId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUrls(\Google\Service\Dfareporting\DfareportingFileUrls $urls)
  {
    $this->urls = $urls;
  }

  public function getUrls()
  {
    return $this->urls;
  }
}
