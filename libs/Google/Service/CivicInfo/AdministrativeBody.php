<?php 
namespace Google\Service\CivicInfo;
class AdministrativeBody extends \Google\Collection
{
  public $absenteeVotingInfoUrl;
  public $ballotInfoUrl;
  protected $correspondenceAddressType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $correspondenceAddressDataType = '';
  public $electionInfoUrl;
  protected $electionOfficialsType = 'Google\Service\CivicInfo\ElectionOfficial';
  protected $electionOfficialsDataType = 'array';
  public $electionRegistrationConfirmationUrl;
  public $electionRegistrationUrl;
  public $electionRulesUrl;
  public $hoursOfOperation;
  public $name;
  protected $physicalAddressType = 'Google\Service\CivicInfo\SimpleAddressType';
  protected $physicalAddressDataType = '';
  public $voterServices;
  public $votingLocationFinderUrl;

  public function setAbsenteeVotingInfoUrl($absenteeVotingInfoUrl)
  {
    $this->absenteeVotingInfoUrl = $absenteeVotingInfoUrl;
  }

  public function getAbsenteeVotingInfoUrl()
  {
    return $this->absenteeVotingInfoUrl;
  }

  public function setBallotInfoUrl($ballotInfoUrl)
  {
    $this->ballotInfoUrl = $ballotInfoUrl;
  }

  public function getBallotInfoUrl()
  {
    return $this->ballotInfoUrl;
  }

  public function setCorrespondenceAddress(\Google\Service\CivicInfo\SimpleAddressType $correspondenceAddress)
  {
    $this->correspondenceAddress = $correspondenceAddress;
  }

  public function getCorrespondenceAddress()
  {
    return $this->correspondenceAddress;
  }

  public function setElectionInfoUrl($electionInfoUrl)
  {
    $this->electionInfoUrl = $electionInfoUrl;
  }

  public function getElectionInfoUrl()
  {
    return $this->electionInfoUrl;
  }

  public function setElectionOfficials($electionOfficials)
  {
    $this->electionOfficials = $electionOfficials;
  }

  public function getElectionOfficials()
  {
    return $this->electionOfficials;
  }

  public function setElectionRegistrationConfirmationUrl($electionRegistrationConfirmationUrl)
  {
    $this->electionRegistrationConfirmationUrl = $electionRegistrationConfirmationUrl;
  }

  public function getElectionRegistrationConfirmationUrl()
  {
    return $this->electionRegistrationConfirmationUrl;
  }

  public function setElectionRegistrationUrl($electionRegistrationUrl)
  {
    $this->electionRegistrationUrl = $electionRegistrationUrl;
  }

  public function getElectionRegistrationUrl()
  {
    return $this->electionRegistrationUrl;
  }

  public function setElectionRulesUrl($electionRulesUrl)
  {
    $this->electionRulesUrl = $electionRulesUrl;
  }

  public function getElectionRulesUrl()
  {
    return $this->electionRulesUrl;
  }

  public function setHoursOfOperation($hoursOfOperation)
  {
    $this->hoursOfOperation = $hoursOfOperation;
  }

  public function getHoursOfOperation()
  {
    return $this->hoursOfOperation;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPhysicalAddress(\Google\Service\CivicInfo\SimpleAddressType $physicalAddress)
  {
    $this->physicalAddress = $physicalAddress;
  }

  public function getPhysicalAddress()
  {
    return $this->physicalAddress;
  }

  public function setVoterServices($voterServices)
  {
    $this->voterServices = $voterServices;
  }

  public function getVoterServices()
  {
    return $this->voterServices;
  }

  public function setVotingLocationFinderUrl($votingLocationFinderUrl)
  {
    $this->votingLocationFinderUrl = $votingLocationFinderUrl;
  }

  public function getVotingLocationFinderUrl()
  {
    return $this->votingLocationFinderUrl;
  }
}
