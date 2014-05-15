<?php 
namespace Google\Service\Books;
class GeolayerdataGeo extends \Google\Collection
{
  protected $boundaryType = 'Google\Service\Books\GeolayerdataGeoBoundary';
  protected $boundaryDataType = 'array';
  public $cachePolicy;
  public $countryCode;
  public $latitude;
  public $longitude;
  public $mapType;
  protected $viewportType = 'Google\Service\Books\GeolayerdataGeoViewport';
  protected $viewportDataType = '';
  public $zoom;

  public function setBoundary($boundary)
  {
    $this->boundary = $boundary;
  }

  public function getBoundary()
  {
    return $this->boundary;
  }

  public function setCachePolicy($cachePolicy)
  {
    $this->cachePolicy = $cachePolicy;
  }

  public function getCachePolicy()
  {
    return $this->cachePolicy;
  }

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }

  public function getCountryCode()
  {
    return $this->countryCode;
  }

  public function setLatitude($latitude)
  {
    $this->latitude = $latitude;
  }

  public function getLatitude()
  {
    return $this->latitude;
  }

  public function setLongitude($longitude)
  {
    $this->longitude = $longitude;
  }

  public function getLongitude()
  {
    return $this->longitude;
  }

  public function setMapType($mapType)
  {
    $this->mapType = $mapType;
  }

  public function getMapType()
  {
    return $this->mapType;
  }

  public function setViewport(\Google\Service\Books\GeolayerdataGeoViewport $viewport)
  {
    $this->viewport = $viewport;
  }

  public function getViewport()
  {
    return $this->viewport;
  }

  public function setZoom($zoom)
  {
    $this->zoom = $zoom;
  }

  public function getZoom()
  {
    return $this->zoom;
  }
}
