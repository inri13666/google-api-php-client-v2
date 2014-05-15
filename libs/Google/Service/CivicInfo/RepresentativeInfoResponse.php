<?php 
namespace Google\Service\CivicInfo;
class RepresentativeInfoResponse extends \Google\Model
{
  protected $divisionsType = 'Google\Service\CivicInfo\GeographicDivision';
  protected $divisionsDataType = 'map';
  public $kind;
  protected $normalizedInputType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $normalizedInputDataType = '';
  protected $officesType = 'Google\Service\CivicInfo\Office';
  protected $officesDataType = 'map';
  protected $officialsType = 'Google\Service\CivicInfo\Official';
  protected $officialsDataType = 'map';
  public $status;

  public function setDivisions($divisions)
  {
    $this->divisions = $divisions;
  }

  public function getDivisions()
  {
    return $this->divisions;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNormalizedInput(\Google\Service\CivicInfo\SimpleAddressType $normalizedInput)
  {
    $this->normalizedInput = $normalizedInput;
  }

  public function getNormalizedInput()
  {
    return $this->normalizedInput;
  }

  public function setOffices($offices)
  {
    $this->offices = $offices;
  }

  public function getOffices()
  {
    return $this->offices;
  }

  public function setOfficials($officials)
  {
    $this->officials = $officials;
  }

  public function getOfficials()
  {
    return $this->officials;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
