<?php 
namespace Google\Service\MapsEngine;
class AssetsListResponse extends \Google\Collection
{
  protected $assetsType = 'Google\Service\MapsEngine\Asset';
  protected $assetsDataType = 'array';
  public $nextPageToken;

  public function setAssets($assets)
  {
    $this->assets = $assets;
  }

  public function getAssets()
  {
    return $this->assets;
  }

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }
}
