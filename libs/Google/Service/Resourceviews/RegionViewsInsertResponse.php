<?php 
namespace Google\Service\Resourceviews;
class RegionViewsInsertResponse extends \Google\Model
{
  protected $resourceType = 'Google\Service\Resourceviews\ResourceView';
  protected $resourceDataType = '';

  public function setResource(\Google\Service\Resourceviews\ResourceView $resource)
  {
    $this->resource = $resource;
  }

  public function getResource()
  {
    return $this->resource;
  }
}
