<?php 
namespace Google\Service\Books;
class DownloadAccessRestriction extends \Google\Model
{
  public $deviceAllowed;
  public $downloadsAcquired;
  public $justAcquired;
  public $kind;
  public $maxDownloadDevices;
  public $message;
  public $nonce;
  public $reasonCode;
  public $restricted;
  public $signature;
  public $source;
  public $volumeId;

  public function setDeviceAllowed($deviceAllowed)
  {
    $this->deviceAllowed = $deviceAllowed;
  }

  public function getDeviceAllowed()
  {
    return $this->deviceAllowed;
  }

  public function setDownloadsAcquired($downloadsAcquired)
  {
    $this->downloadsAcquired = $downloadsAcquired;
  }

  public function getDownloadsAcquired()
  {
    return $this->downloadsAcquired;
  }

  public function setJustAcquired($justAcquired)
  {
    $this->justAcquired = $justAcquired;
  }

  public function getJustAcquired()
  {
    return $this->justAcquired;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaxDownloadDevices($maxDownloadDevices)
  {
    $this->maxDownloadDevices = $maxDownloadDevices;
  }

  public function getMaxDownloadDevices()
  {
    return $this->maxDownloadDevices;
  }

  public function setMessage($message)
  {
    $this->message = $message;
  }

  public function getMessage()
  {
    return $this->message;
  }

  public function setNonce($nonce)
  {
    $this->nonce = $nonce;
  }

  public function getNonce()
  {
    return $this->nonce;
  }

  public function setReasonCode($reasonCode)
  {
    $this->reasonCode = $reasonCode;
  }

  public function getReasonCode()
  {
    return $this->reasonCode;
  }

  public function setRestricted($restricted)
  {
    $this->restricted = $restricted;
  }

  public function getRestricted()
  {
    return $this->restricted;
  }

  public function setSignature($signature)
  {
    $this->signature = $signature;
  }

  public function getSignature()
  {
    return $this->signature;
  }

  public function setSource($source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setVolumeId($volumeId)
  {
    $this->volumeId = $volumeId;
  }

  public function getVolumeId()
  {
    return $this->volumeId;
  }
}
