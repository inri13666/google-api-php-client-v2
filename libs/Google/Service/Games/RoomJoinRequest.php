<?php 
namespace Google\Service\Games;
class RoomJoinRequest extends \Google\Collection
{
  public $capabilities;
  protected $clientAddressType = 'Google\Service\Games\RoomClientAddress';
  protected $clientAddressDataType = '';
  public $kind;
  protected $networkDiagnosticsType = 'Google\Service\Games\NetworkDiagnostics';
  protected $networkDiagnosticsDataType = '';

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
}
