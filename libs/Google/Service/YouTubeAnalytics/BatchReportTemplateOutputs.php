<?php 
namespace Google\Service\YouTubeAnalytics;
class BatchReportTemplateOutputs extends \Google\Model
{
  public $downloadUrl;
  public $format;
  public $type;

  public function setDownloadUrl($downloadUrl)
  {
    $this->downloadUrl = $downloadUrl;
  }

  public function getDownloadUrl()
  {
    return $this->downloadUrl;
  }

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
