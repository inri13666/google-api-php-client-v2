<?php 
namespace Google\Service\YouTube;
class ActivityContentDetailsFavorite extends \Google\Model
{
  protected $resourceIdType = 'Google\Service\YouTube\ResourceId';
  protected $resourceIdDataType = '';

  public function setResourceId(\Google\Service\YouTube\ResourceId $resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }
}
