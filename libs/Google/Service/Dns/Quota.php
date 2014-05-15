<?php 
namespace Google\Service\Dns;
class Quota extends \Google\Model
{
  public $kind;
  public $managedZones;
  public $resourceRecordsPerRrset;
  public $rrsetAdditionsPerChange;
  public $rrsetDeletionsPerChange;
  public $rrsetsPerManagedZone;
  public $totalRrdataSizePerChange;

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

  public function setResourceRecordsPerRrset($resourceRecordsPerRrset)
  {
    $this->resourceRecordsPerRrset = $resourceRecordsPerRrset;
  }

  public function getResourceRecordsPerRrset()
  {
    return $this->resourceRecordsPerRrset;
  }

  public function setRrsetAdditionsPerChange($rrsetAdditionsPerChange)
  {
    $this->rrsetAdditionsPerChange = $rrsetAdditionsPerChange;
  }

  public function getRrsetAdditionsPerChange()
  {
    return $this->rrsetAdditionsPerChange;
  }

  public function setRrsetDeletionsPerChange($rrsetDeletionsPerChange)
  {
    $this->rrsetDeletionsPerChange = $rrsetDeletionsPerChange;
  }

  public function getRrsetDeletionsPerChange()
  {
    return $this->rrsetDeletionsPerChange;
  }

  public function setRrsetsPerManagedZone($rrsetsPerManagedZone)
  {
    $this->rrsetsPerManagedZone = $rrsetsPerManagedZone;
  }

  public function getRrsetsPerManagedZone()
  {
    return $this->rrsetsPerManagedZone;
  }

  public function setTotalRrdataSizePerChange($totalRrdataSizePerChange)
  {
    $this->totalRrdataSizePerChange = $totalRrdataSizePerChange;
  }

  public function getTotalRrdataSizePerChange()
  {
    return $this->totalRrdataSizePerChange;
  }
}
