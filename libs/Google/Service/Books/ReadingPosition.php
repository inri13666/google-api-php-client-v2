<?php 
namespace Google\Service\Books;
class ReadingPosition extends \Google\Model
{
  public $epubCfiPosition;
  public $gbImagePosition;
  public $gbTextPosition;
  public $kind;
  public $pdfPosition;
  public $updated;
  public $volumeId;

  public function setEpubCfiPosition($epubCfiPosition)
  {
    $this->epubCfiPosition = $epubCfiPosition;
  }

  public function getEpubCfiPosition()
  {
    return $this->epubCfiPosition;
  }

  public function setGbImagePosition($gbImagePosition)
  {
    $this->gbImagePosition = $gbImagePosition;
  }

  public function getGbImagePosition()
  {
    return $this->gbImagePosition;
  }

  public function setGbTextPosition($gbTextPosition)
  {
    $this->gbTextPosition = $gbTextPosition;
  }

  public function getGbTextPosition()
  {
    return $this->gbTextPosition;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPdfPosition($pdfPosition)
  {
    $this->pdfPosition = $pdfPosition;
  }

  public function getPdfPosition()
  {
    return $this->pdfPosition;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
