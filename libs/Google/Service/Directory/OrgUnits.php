<?php 
namespace Google\Service\Directory;
class OrgUnits extends \Google\Collection
{
  public $etag;
  public $kind;
  protected $organizationUnitsType = 'Google\Service\Directory\OrgUnit';
  protected $organizationUnitsDataType = 'array';

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setOrganizationUnits($organizationUnits)
  {
    $this->organizationUnits = $organizationUnits;
  }

  public function getOrganizationUnits()
  {
    return $this->organizationUnits;
  }
}
