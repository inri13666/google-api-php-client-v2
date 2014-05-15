<?php 
namespace Google\Service\Dns;
class ManagedZonesListResponse extends \Google\Collection
{
  public $kind;
  protected $managedZonesType = 'Google\Service\Dns\ManagedZone';
  protected $managedZonesDataType = 'array';
  public $nextPageToken;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setManagedZones($managedZones)
  {
    $this->managedZones = $managedZones;
  }

  public function getManagedZones()
  {
    return $this->managedZones;
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
