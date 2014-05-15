<?php 
namespace Google\Service\Books;
class VolumeAccessInfoPdf extends \Google\Model
{
  public $acsTokenLink;
  public $downloadLink;
  public $isAvailable;

  public function setAcsTokenLink($acsTokenLink)
  {
    $this->acsTokenLink = $acsTokenLink;
  }

  public function getAcsTokenLink()
  {
    return $this->acsTokenLink;
  }

  public function setDownloadLink($downloadLink)
  {
    $this->downloadLink = $downloadLink;
  }

  public function getDownloadLink()
  {
    return $this->downloadLink;
  }

  public function setIsAvailable($isAvailable)
  {
    $this->isAvailable = $isAvailable;
  }

  public function getIsAvailable()
  {
    return $this->isAvailable;
  }
}
