<?php 
namespace Google\Service\Games;
class RoomLeaveDiagnostics extends \Google\Collection
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  protected $peerSessionType = 'Google\Service\Games\PeerSessionDiagnostics';
  protected $peerSessionDataType = 'array';
  public $socketsUsed;

  public function setAndroidNetworkSubtype($androidNetworkSubtype)
  {
    $this->androidNetworkSubtype = $androidNetworkSubtype;
  }

  public function getAndroidNetworkSubtype()
  {
    return $this->androidNetworkSubtype;
  }

  public function setAndroidNetworkType($androidNetworkType)
  {
    $this->androidNetworkType = $androidNetworkType;
  }

  public function getAndroidNetworkType()
  {
    return $this->androidNetworkType;
  }

  public function setIosNetworkType($iosNetworkType)
  {
    $this->iosNetworkType = $iosNetworkType;
  }

  public function getIosNetworkType()
  {
    return $this->iosNetworkType;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setNetworkOperatorCode($networkOperatorCode)
  {
    $this->networkOperatorCode = $networkOperatorCode;
  }

  public function getNetworkOperatorCode()
  {
    return $this->networkOperatorCode;
  }

  public function setNetworkOperatorName($networkOperatorName)
  {
    $this->networkOperatorName = $networkOperatorName;
  }

  public function getNetworkOperatorName()
  {
    return $this->networkOperatorName;
  }

  public function setPeerSession($peerSession)
  {
    $this->peerSession = $peerSession;
  }

  public function getPeerSession()
  {
    return $this->peerSession;
  }

  public function setSocketsUsed($socketsUsed)
  {
    $this->socketsUsed = $socketsUsed;
  }

  public function getSocketsUsed()
  {
    return $this->socketsUsed;
  }
}
