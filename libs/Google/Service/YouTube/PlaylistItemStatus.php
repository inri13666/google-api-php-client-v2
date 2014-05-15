<?php 
namespace Google\Service\YouTube;
class PlaylistItemStatus extends \Google\Model
{
  public $privacyStatus;

  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }

  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
}
