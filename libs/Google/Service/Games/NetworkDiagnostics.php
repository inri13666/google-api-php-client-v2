<?php 
namespace Google\Service\Games;
class NetworkDiagnostics extends \Google\Model
{
  public $androidNetworkSubtype;
  public $androidNetworkType;
  public $iosNetworkType;
  public $kind;
  public $networkOperatorCode;
  public $networkOperatorName;
  public $registrationLatencyMillis;

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

  public function setRegistrationLatencyMillis($registrationLatencyMillis)
  {
    $this->registrationLatencyMillis = $registrationLatencyMillis;
  }

  public function getRegistrationLatencyMillis()
  {
    return $this->registrationLatencyMillis;
  }
}
