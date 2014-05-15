<?php 
namespace Google\Service\Plus;
class PersonCover extends \Google\Model
{
  protected $coverInfoType = 'Google\Service\Plus\PersonCoverCoverInfo';
  protected $coverInfoDataType = '';
  protected $coverPhotoType = 'Google\Service\Plus\PersonCoverCoverPhoto';
  protected $coverPhotoDataType = '';
  public $layout;

  public function setCoverInfo(\Google\Service\Plus\PersonCoverCoverInfo $coverInfo)
  {
    $this->coverInfo = $coverInfo;
  }

  public function getCoverInfo()
  {
    return $this->coverInfo;
  }

  public function setCoverPhoto(\Google\Service\Plus\PersonCoverCoverPhoto $coverPhoto)
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
