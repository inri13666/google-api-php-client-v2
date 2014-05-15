<?php 
namespace Google\Service\PlusDomains;
class ActivityObjectStatusForViewer extends \Google\Model
{
  public $canComment;
  public $canPlusone;
  public $canUpdate;
  public $isPlusOned;
  public $resharingDisabled;

  public function setCanComment($canComment)
  {
    $this->canComment = $canComment;
  }

  public function getCanComment()
  {
    return $this->canComment;
  }

  public function setCanPlusone($canPlusone)
  {
    $this->canPlusone = $canPlusone;
  }

  public function getCanPlusone()
  {
    return $this->canPlusone;
  }

  public function setCanUpdate($canUpdate)
  {
    $this->canUpdate = $canUpdate;
  }

  public function getCanUpdate()
  {
    return $this->canUpdate;
  }

  public function setIsPlusOned($isPlusOned)
  {
    $this->isPlusOned = $isPlusOned;
  }

  public function getIsPlusOned()
  {
    return $this->isPlusOned;
  }

  public function setResharingDisabled($resharingDisabled)
  {
    $this->resharingDisabled = $resharingDisabled;
  }

  public function getResharingDisabled()
  {
    return $this->resharingDisabled;
  }
}
