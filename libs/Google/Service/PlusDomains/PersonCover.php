<?php 
namespace Google\Service\PlusDomains;
class PersonCover extends \Google\Model
{
  protected $coverInfoType = 'Google\Service\PlusDomains\PersonCoverCoverInfo';
  protected $coverInfoDataType = '';
  protected $coverPhotoType = 'Google\Service\PlusDomains\PersonCoverCoverPhoto';
  protected $coverPhotoDataType = '';
  public $layout;

  public function setCoverInfo(\Google\Service\PlusDomains\PersonCoverCoverInfo $coverInfo)
  {
    $this->coverInfo = $coverInfo;
  }

  public function getCoverInfo()
  {
    return $this->coverInfo;
  }

  public function setCoverPhoto(\Google\Service\PlusDomains\PersonCoverCoverPhoto $coverPhoto)
  {
    $this->coverPhoto = $coverPhoto;
  }

  public function getCoverPhoto()
  {
    return $this->coverPhoto;
  }

  public function setLayout($layout)
  {
    $this->layout = $layout;
  }

  public function getLayout()
  {
    return $this->layout;
  }
}
