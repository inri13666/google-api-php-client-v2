<?php 
namespace Google\Service\MapsEngine;
class RastercollectionsListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $rasterCollectionsType = 'Google\Service\MapsEngine\RasterCollection';
  protected $rasterCollectionsDataType = 'array';

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setRasterCollections($rasterCollections)
  {
    $this->rasterCollections = $rasterCollections;
  }

  public function getRasterCollections()
  {
    return $this->rasterCollections;
  }
}
