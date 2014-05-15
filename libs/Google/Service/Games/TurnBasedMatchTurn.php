<?php 
namespace Google\Service\Games;
class TurnBasedMatchTurn extends \Google\Collection
{
  protected $dataType = 'Google\Service\Games\TurnBasedMatchDataRequest';
  protected $dataDataType = '';
  public $kind;
  public $matchVersion;
  public $pendingParticipantId;
  protected $resultsType = 'Google\Service\Games\ParticipantResult';
  protected $resultsDataType = 'array';

  public function setData(\Google\Service\Games\TurnBasedMatchDataRequest $data)
  {
    $this->data = $data;
  }

  public function getData()
  {
    return $this->data;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMatchVersion($matchVersion)
  {
    $this->matchVersion = $matchVersion;
  }

  public function getMatchVersion()
  {
    return $this->matchVersion;
  }

  public function setPendingParticipantId($pendingParticipantId)
  {
    $this->pendingParticipantId = $pendingParticipantId;
  }

  public function getPendingParticipantId()
  {
    return $this->pendingParticipantId;
  }

  public function setResults($results)
  {
    $this->results = $results;
  }

  public function getResults()
  {
    return $this->results;
  }
}
