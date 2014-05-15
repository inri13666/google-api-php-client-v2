<?php 
namespace Google\Service\SQLAdmin;
class Tier extends \Google\Collection
{
  public $diskQuota;
  public $rAM;
  public $kind;
  public $region;
  public $tier;

  public function setDiskQuota($diskQuota)
  {
    $this->diskQuota = $diskQuota;
  }

  public function getDiskQuota()
  {
    return $this->diskQuota;
  }

  public function setRAM($rAM)
  {
    $this->rAM = $rAM;
  }

  public function getRAM()
  {
    return $this->rAM;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setTier($tier)
  {
    $this->tier = $tier;
  }

  public function getTier()
  {
    return $this->tier;
  }
}
