<?php 
namespace Google\Service\MapsEngine;
class LayersListResponse extends \Google\Collection
{
  protected $layersType = 'Google\Service\MapsEngine\Layer';
  protected $layersDataType = 'array';
  public $nextPageToken;

  public function setLayers($layers)
  {
    $this->layers = $layers;
  }

  public function getLayers()
  {
    return $this->layers;
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
