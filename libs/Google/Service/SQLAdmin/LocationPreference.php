<?php 
namespace Google\Service\SQLAdmin;
class LocationPreference extends \Google\Model
{
  public $followGaeApplication;
  public $kind;
  public $zone;

  public function setFollowGaeApplication($followGaeApplication)
  {
    $this->followGaeApplication = $followGaeApplication;
  }

  public function getFollowGaeApplication()
  {
    return $this->followGaeApplication;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setZone($zone)
  {
    $this->zone = $zone;
  }

  public function getZone()
  {
    return $this->zone;
  }
}
