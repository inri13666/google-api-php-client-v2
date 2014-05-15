<?php 
namespace Google\Service\DoubleClickBidManager;
class UploadLineItemsResponse extends \Google\Model
{
  protected $uploadStatusType = 'Google\Service\DoubleClickBidManager\UploadStatus';
  protected $uploadStatusDataType = '';

  public function setUploadStatus(\Google\Service\DoubleClickBidManager\UploadStatus $uploadStatus)
  {
    $this->uploadStatus = $uploadStatus;
  }

  public function getUploadStatus()
  {
    return $this->uploadStatus;
  }
}
