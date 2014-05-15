<?php 
namespace Google\Service\Coordinate;
class LocationRecord extends \Google\Model
{
  public $collectionTime;
  public $confidenceRadius;
  public $kind;
  public $latitude;
  public $longitude;

  public function setCollectionTime($collectionTime)
  {
    $this->collectionTime = $collectionTime;
  }

  public function getCollectionTime()
  {
    return $this->collectionTime;
  }

  public function setConfidenceRadius($confidenceRadius)
  {
    $this->confidenceRadius = $confidenceRadius;
  }

  public function getConfidenceRadius()
  {
    return $this->confidenceRadius;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
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
}
