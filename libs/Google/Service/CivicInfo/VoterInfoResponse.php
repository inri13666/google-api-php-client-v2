<?php 
namespace Google\Service\CivicInfo;
class VoterInfoResponse extends \Google\Collection
{
  protected $contestsType = 'Google\Service\CivicInfo\Contest';
  protected $contestsDataType = 'array';
  protected $earlyVoteSitesType = 'Google\Service\CivicInfo\PollingLocation';
  protected $earlyVoteSitesDataType = 'array';
  protected $electionType = 'Google\Service\CivicInfo\Election';
  protected $electionDataType = '';
  public $kind;
  protected $normalizedInputType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $normalizedInputDataType = '';
  protected $pollingLocationsType = 'Google\Service\CivicInfo\PollingLocation';
  protected $pollingLocationsDataType = 'array';
  protected $stateType = 'Google\Service\CivicInfo\AdministrationRegion';
  protected $stateDataType = 'array';
  public $status;

  public function setContests($contests)
  {
    $this->contests = $contests;
  }

  public function getContests()
  {
    return $this->contests;
  }

  public function setEarlyVoteSites($earlyVoteSites)
  {
    $this->earlyVoteSites = $earlyVoteSites;
  }

  public function getEarlyVoteSites()
  {
    return $this->earlyVoteSites;
  }

  public function setElection(\Google\Service\CivicInfo\Election $election)
  {
    $this->election = $election;
  }

  public function getElection()
  {
    return $this->election;
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

  public function setPollingLocations($pollingLocations)
  {
    $this->pollingLocations = $pollingLocations;
  }

  public function getPollingLocations()
  {
    return $this->pollingLocations;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
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
