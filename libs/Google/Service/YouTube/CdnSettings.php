<?php 
namespace Google\Service\YouTube;
class CdnSettings extends \Google\Model
{
  public $format;
  protected $ingestionInfoType = 'Google\Service\YouTube\IngestionInfo';
  protected $ingestionInfoDataType = '';
  public $ingestionType;

  public function setFormat($format)
  {
    $this->format = $format;
  }

  public function getFormat()
  {
    return $this->format;
  }

  public function setIngestionInfo(\Google\Service\YouTube\IngestionInfo $ingestionInfo)
  {
    $this->ingestionInfo = $ingestionInfo;
  }

  public function getIngestionInfo()
  {
    return $this->ingestionInfo;
  }

  public function setIngestionType($ingestionType)
  {
    $this->ingestionType = $ingestionType;
  }

  public function getIngestionType()
  {
    return $this->ingestionType;
  }
}
