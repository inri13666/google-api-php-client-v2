<?php 
namespace Google\Service\Resourceviews;
class RegionViewsListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $resourceViewsType = 'Google\Service\Resourceviews\ResourceView';
  protected $resourceViewsDataType = 'array';

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setResourceViews($resourceViews)
  {
    $this->resourceViews = $resourceViews;
  }

  public function getResourceViews()
  {
    return $this->resourceViews;
  }
}
