<?php 
namespace Google\Service\Games;
class TurnBasedMatchCreateRequest extends \Google\Collection
{
  protected $autoMatchingCriteriaType = 'Google\Service\Games\TurnBasedAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  public $invitedPlayerIds;
  public $kind;
  public $requestId;
  public $variant;

  public function setAutoMatchingCriteria(\Google\Service\Games\TurnBasedAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setInvitedPlayerIds($invitedPlayerIds)
  {
    $this->invitedPlayerIds = $invitedPlayerIds;
  }

  public function getInvitedPlayerIds()
  {
    return $this->invitedPlayerIds;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }

  public function getRequestId()
  {
    return $this->requestId;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}
