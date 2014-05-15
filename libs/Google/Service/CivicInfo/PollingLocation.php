<?php 
namespace Google\Service\CivicInfo;
class PollingLocation extends \Google\Collection
{
  protected $addressType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $addressDataType = '';
  public $endDate;
  public $id;
  public $name;
  public $notes;
  public $pollingHours;
  protected $sourcesType = 'Google\Service\CivicInfo\Source';
  protected $sourcesDataType = 'array';
  public $startDate;
  public $voterServices;

  public function setAddress(\Google\Service\CivicInfo\SimpleAddressType $address)
  {
    $this->address = $address;
  }

  public function getAddress()
  {
    return $this->address;
  }

  public function setEndDate($endDate)
  {
    $this->endDate = $endDate;
  }

  public function getEndDate()
  {
    return $this->endDate;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setNotes($notes)
  {
    $this->notes = $notes;
  }

  public function getNotes()
  {
    return $this->notes;
  }

  public function setPollingHours($pollingHours)
  {
    $this->pollingHours = $pollingHours;
  }

  public function getPollingHours()
  {
    return $this->pollingHours;
  }

  public function setSources($sources)
  {
    $this->sources = $sources;
  }

  public function getSources()
  {
    return $this->sources;
  }

  public function setStartDate($startDate)
  {
    $this->startDate = $startDate;
  }

  public function getStartDate()
  {
    return $this->startDate;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }
}
