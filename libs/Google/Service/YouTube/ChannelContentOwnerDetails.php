<?php 
namespace Google\Service\YouTube;
class ChannelContentOwnerDetails extends \Google\Model
{
  public $contentOwner;
  public $timeLinked;

  public function setContentOwner($contentOwner)
  {
    $this->contentOwner = $contentOwner;
  }

  public function getContentOwner()
  {
    return $this->contentOwner;
  }

  public function setTimeLinked($timeLinked)
  {
    $this->timeLinked = $timeLinked;
  }

  public function getTimeLinked()
  {
    return $this->timeLinked;
  }
}
