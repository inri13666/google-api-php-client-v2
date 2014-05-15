<?php 
namespace Google\Service\YouTube;
class PromotedItem extends \Google\Model
{
  public $customMessage;
  protected $idType = 'Google\Service\YouTube\PromotedItemId';
  protected $idDataType = '';
  public $promotedByContentOwner;
  protected $timingType = 'Google\Service\YouTube\InvideoTiming';
  protected $timingDataType = '';

  public function setCustomMessage($customMessage)
  {
    $this->customMessage = $customMessage;
  }

  public function getCustomMessage()
  {
    return $this->customMessage;
  }

  public function setId(\Google\Service\YouTube\PromotedItemId $id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setPromotedByContentOwner($promotedByContentOwner)
  {
    $this->promotedByContentOwner = $promotedByContentOwner;
  }

  public function getPromotedByContentOwner()
  {
    return $this->promotedByContentOwner;
  }

  public function setTiming(\Google\Service\YouTube\InvideoTiming $timing)
  {
    $this->timing = $timing;
  }

  public function getTiming()
  {
    return $this->timing;
  }
}
