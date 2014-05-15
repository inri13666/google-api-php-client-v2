<?php 
namespace Google\Service\Manager;
class DeploymentsListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $resourcesType = 'Google\Service\Manager\Deployment';
  protected $resourcesDataType = 'array';

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setResources($resources)
  {
    $this->resources = $resources;
  }

  public function getResources()
  {
    return $this->resources;
  }
}
