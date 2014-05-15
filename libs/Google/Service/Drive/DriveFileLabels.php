<?php 
namespace Google\Service\Drive;
class DriveFileLabels extends \Google\Model
{
  public $hidden;
  public $restricted;
  public $starred;
  public $trashed;
  public $viewed;

  public function setHidden($hidden)
  {
    $this->hidden = $hidden;
  }

  public function getHidden()
  {
    return $this->hidden;
  }

  public function setRestricted($restricted)
  {
    $this->restricted = $restricted;
  }

  public function getRestricted()
  {
    return $this->restricted;
  }

  public function setStarred($starred)
  {
    $this->starred = $starred;
  }

  public function getStarred()
  {
    return $this->starred;
  }

  public function setTrashed($trashed)
  {
    $this->trashed = $trashed;
  }

  public function getTrashed()
  {
    return $this->trashed;
  }

  public function setViewed($viewed)
  {
    $this->viewed = $viewed;
  }

  public function getViewed()
  {
    return $this->viewed;
  }
}
