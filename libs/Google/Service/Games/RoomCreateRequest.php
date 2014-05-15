<?php 
namespace Google\Service\Games;
class RoomCreateRequest extends \Google\Collection
{
  protected $autoMatchingCriteriaType = 'Google\Service\Games\RoomAutoMatchingCriteria';
  protected $autoMatchingCriteriaDataType = '';
  public $capabilities;
  protected $clientAddressType = 'Google\Service\Games\RoomClientAddress';
  protected $clientAddressDataType = '';
  public $invitedPlayerIds;
  public $kind;
  protected $networkDiagnosticsType = 'Google\Service\Games\NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';
  public $requestId;
  public $variant;

  public function setAutoMatchingCriteria(\Google\Service\Games\RoomAutoMatchingCriteria $autoMatchingCriteria)
  {
    $this->autoMatchingCriteria = $autoMatchingCriteria;
  }

  public function getAutoMatchingCriteria()
  {
    return $this->autoMatchingCriteria;
  }

  public function setCapabilities($capabilities)
  {
    $this->capabilities = $capabilities;
  }

  public function getCapabilities()
  {
    return $this->capabilities;
  }

  public function setClientAddress(\Google\Service\Games\RoomClientAddress $clientAddress)
  {
    $this->clientAddress = $clientAddress;
  }

  public function getClientAddress()
  {
    return $this->clientAddress;
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

  public function setNetworkDiagnostics(\Google\Service\Games\NetworkDiagnostics $networkDiagnostics)
  {
    $this->networkDiagnostics = $networkDiagnostics;
  }

  public function getNetworkDiagnostics()
  {
    return $this->networkDiagnostics;
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
