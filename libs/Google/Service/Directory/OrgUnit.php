<?php 
namespace Google\Service\Directory;
class OrgUnit extends \Google\Model
{
  public $blockInheritance;
  public $description;
  public $etag;
  public $kind;
  public $name;
  public $orgUnitPath;
  public $parentOrgUnitPath;

  public function setBlockInheritance($blockInheritance)
  {
    $this->blockInheritance = $blockInheritance;
  }

  public function getBlockInheritance()
  {
    return $this->blockInheritance;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOrgUnitPath($orgUnitPath)
  {
    $this->orgUnitPath = $orgUnitPath;
  }

  public function getOrgUnitPath()
  {
    return $this->orgUnitPath;
  }

  public function setParentOrgUnitPath($parentOrgUnitPath)
  {
    $this->parentOrgUnitPath = $parentOrgUnitPath;
  }

  public function getParentOrgUnitPath()
  {
    return $this->parentOrgUnitPath;
  }
}
