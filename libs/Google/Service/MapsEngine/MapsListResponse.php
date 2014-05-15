<?php 
namespace Google\Service\MapsEngine;
class MapsListResponse extends \Google\Collection
{
  protected $mapsType = 'Google\Service\MapsEngine\Map';
  protected $mapsDataType = 'array';
  public $nextPageToken;

  public function setMaps($maps)
  {
    $this->maps = $maps;
  }

  public function getMaps()
  {
    return $this->maps;
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
