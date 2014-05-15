<?php 
namespace Google\Service\Books;
class Geolayerdata extends \Google\Model
{
  protected $commonType = 'Google\Service\Books\GeolayerdataCommon';
  protected $commonDataType = '';
  protected $geoType = 'Google\Service\Books\GeolayerdataGeo';
  protected $geoDataType = '';
  public $kind;

  public function setCommon(\Google\Service\Books\GeolayerdataCommon $common)
  {
    $this->common = $common;
  }

  public function getCommon()
  {
    return $this->common;
  }

  public function setGeo(\Google\Service\Books\GeolayerdataGeo $geo)
  {
    $this->geo = $geo;
  }

  public function getGeo()
  {
    return $this->geo;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }
}
