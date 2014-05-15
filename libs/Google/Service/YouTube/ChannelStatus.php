<?php 
namespace Google\Service\YouTube;
class ChannelStatus extends \Google\Model
{
  public $isLinked;
  public $privacyStatus;

  public function setIsLinked($isLinked)
  {
    $this->isLinked = $isLinked;
  }

  public function getIsLinked()
  {
    return $this->isLinked;
  }

  public function setPrivacyStatus($privacyStatus)
  {
    $this->privacyStatus = $privacyStatus;
  }

  public function getPrivacyStatus()
  {
    return $this->privacyStatus;
  }
}
