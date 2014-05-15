<?php 
namespace Google\Service\Books;
class GeolayerdataGeoViewport extends \Google\Model
{
  protected $hiType = 'Google\Service\Books\GeolayerdataGeoViewportHi';
  protected $hiDataType = '';
  protected $loType = 'Google\Service\Books\GeolayerdataGeoViewportLo';
  protected $loDataType = '';

  public function setHi(\Google\Service\Books\GeolayerdataGeoViewportHi $hi)
  {
    $this->hi = $hi;
  }

  public function getHi()
  {
    return $this->hi;
  }

  public function setLo(\Google\Service\Books\GeolayerdataGeoViewportLo $lo)
  {
    $this->lo = $lo;
  }

  public function getLo()
  {
    return $this->lo;
  }
}
