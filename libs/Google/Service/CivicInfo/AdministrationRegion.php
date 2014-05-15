<?php 
namespace Google\Service\CivicInfo;
class AdministrationRegion extends \Google\Collection
{
  protected $electionAdministrationBodyType = 'Google\Service\CivicInfo\AdministrativeBody';
  protected $electionAdministrationBodyDataType = '';
  public $id;
  protected $localJurisdictionType = 'Google\Service\CivicInfo\AdministrationRegion';
  protected $localJurisdictionDataType = '';
  public $name;
  protected $sourcesType = 'Google\Service\CivicInfo\Source';
  protected $sourcesDataType = 'array';

  public function setElectionAdministrationBody(\Google\Service\CivicInfo\AdministrativeBody $electionAdministrationBody)
  {
    $this->electionAdministrationBody = $electionAdministrationBody;
  }

  public function getElectionAdministrationBody()
  {
    return $this->electionAdministrationBody;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setLocalJurisdiction(\Google\Service\CivicInfo\AdministrationRegion $localJurisdiction)
  {
    $this->localJurisdiction = $localJurisdiction;
  }

  public function getLocalJurisdiction()
  {
    return $this->localJurisdiction;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }
}
