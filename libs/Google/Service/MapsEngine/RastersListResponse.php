<?php 
namespace Google\Service\MapsEngine;
class RastersListResponse extends \Google\Collection
{
  public $nextPageToken;
  protected $rastersType = 'Google\Service\MapsEngine\Raster';
  protected $rastersDataType = 'array';

  public function setNextPageToken($nextPageToken)
  {
    $this->nextPageToken = $nextPageToken;
  }

  public function getNextPageToken()
  {
    return $this->nextPageToken;
  }

  public function setRasters($rasters)
  {
    $this->rasters = $rasters;
  }

  public function getRasters()
  {
    return $this->rasters;
  }
}
