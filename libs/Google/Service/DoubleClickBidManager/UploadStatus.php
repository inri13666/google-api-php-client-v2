<?php 
namespace Google\Service\DoubleClickBidManager;
class UploadStatus extends \Google\Collection
{
  public $errors;
  protected $rowStatusType = 'Google\Service\DoubleClickBidManager\RowStatus';
  protected $rowStatusDataType = 'array';

  public function setErrors($errors)
  {
    $this->errors = $errors;
  }

  public function getErrors()
  {
    return $this->errors;
  }

  public function setRowStatus($rowStatus)
  {
    $this->rowStatus = $rowStatus;
  }

  public function getRowStatus()
  {
    return $this->rowStatus;
  }
}
