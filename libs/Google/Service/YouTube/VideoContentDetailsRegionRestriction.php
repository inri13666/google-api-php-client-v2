<?php 
namespace Google\Service\YouTube;
class VideoContentDetailsRegionRestriction extends \Google\Collection
{
  public $allowed;
  public $blocked;

  public function setAllowed($allowed)
  {
    $this->allowed = $allowed;
  }

  public function getAllowed()
  {
    return $this->allowed;
  }

  public function setBlocked($blocked)
  {
    $this->blocked = $blocked;
  }

  public function getBlocked()
  {
    return $this->blocked;
  }
}
