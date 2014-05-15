<?php 
namespace Google\Service\YouTube;
class ActivityContentDetailsRecommendation extends \Google\Model
{
  public $reason;
  protected $resourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $resourceIdDataType = '';
  protected $seedResourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $seedResourceIdDataType = '';

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReason()
  {
    return $this->reason;
  }

  public function setResourceId(\Google\Service\YouTube\ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setSeedResourceId(\Google\Service\YouTube\ResourceId $seedResourceId)
  {
    $this->seedResourceId = $seedResourceId;
  }

  public function getSeedResourceId()
  {
    return $this->seedResourceId;
  }
}
