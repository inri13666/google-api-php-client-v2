<?php 
namespace Google\Service\Games;
class TurnBasedMatch extends \Google\Collection
{
  public $applicationId;
  protected $autoMatchingCriteriaType = 'Google\Service\Games\TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  protected $creationDetailsType = 'Google\Service\Games\TurnBasedMatchModification';
  protected $creationDetailsDataType = '';
  protected $dataType = 'Google\Service\Games\TurnBasedMatchData';
  protected $dataDataType = '';
  public $description;
  public $inviterId;
  public $kind;
  protected $lastUpdateDetailsType = 'Google\Service\Games\TurnBasedMatchModification';
  protected $lastUpdateDetailsDataType = '';
  public $matchId;
  public $matchNumber;
  public $matchVersion;
  protected $participantsType = 'Google\Service\Games\TurnBasedMatchParticipant';
  protected $participantsDataType = 'array';
  public $pendingParticipantId;
  protected $previousMatchDataType = 'Google\Service\Games\TurnBasedMatchData';
  protected $previousMatchDataDataType = '';
  public $rematchId;
  protected $resultsType = 'Google\Service\Games\ParticipantResult';
  protected $resultsDataType = 'array';
  public $status;
  public $userMatchStatus;
  public $variant;
  public $withParticipantId;

  public function setApplicationId($applicationId)
  {
    $this->applicationId = $applicationId;
  }

  public function getApplicationId()
  {
    return $this->applicationId;
  }

  public function setAutoMatchingCriteria(\Google\Service\Games\TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setCreationDetails(\Google\Service\Games\TurnBasedMatchModification $creationDetails)
  {
    $this->creationDetails = $creationDetails;
  }

  public function getCreationDetails()
  {
    return $this->creationDetails;
  }

  public function setData(\Google\Service\Games\TurnBasedMatchData $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setInviterId($inviterId)
  {
    $this->inviterId = $inviterId;
  }

  public function getInviterId()
  {
    return $this->inviterId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastUpdateDetails(\Google\Service\Games\TurnBasedMatchModification $lastUpdateDetails)
  {
    $this->lastUpdateDetails = $lastUpdateDetails;
  }

  public function getLastUpdateDetails()
  {
    return $this->lastUpdateDetails;
  }

  public function setMatchId($matchId)
  {
    $this->matchId = $matchId;
  }

  public function getMatchId()
  {
    return $this->matchId;
  }

  public function setMatchNumber($matchNumber)
  {
    $this->matchNumber = $matchNumber;
  }

  public function getMatchNumber()
  {
    return $this->matchNumber;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setParticipants($participants)
  {
    $this->participants = $participants;
  }

  public function getParticipants()
  {
    return $this->participants;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setPreviousMatchData(\Google\Service\Games\TurnBasedMatchData $previousMatchData)
  {
    $this->previousMatchData = $previousMatchData;
  }

  public function getPreviousMatchData()
  {
    return $this->previousMatchData;
  }

  public function setRematchId($rematchId)
  {
    $this->rematchId = $rematchId;
  }

  public function getRematchId()
  {
    return $this->rematchId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUserMatchStatus($userMatchStatus)
  {
    $this->userMatchStatus = $userMatchStatus;
  }

  public function getUserMatchStatus()
  {
    return $this->userMatchStatus;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }

  public function setWithParticipantId($withParticipantId)
  {
    $this->withParticipantId = $withParticipantId;
  }

  public function getWithParticipantId()
  {
    return $this->withParticipantId;
  }
}
