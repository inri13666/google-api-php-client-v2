<?php 
namespace Google\Service\SQLAdmin;
class SslCert extends \Google\Model
{
  public $cert;
  public $certSerialNumber;
  public $commonName;
  public $createTime;
  public $expirationTime;
  public $instance;
  public $kind;
  public $sha1Fingerprint;

  public function setCert($cert)
  {
    $this->cert = $cert;
  }

  public function getCert()
  {
    return $this->cert;
  }

  public function setCertSerialNumber($certSerialNumber)
  {
    $this->certSerialNumber = $certSerialNumber;
  }

  public function getCertSerialNumber()
  {
    return $this->certSerialNumber;
  }

  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }

  public function getCommonName()
  {
    return $this->commonName;
  }

  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }

  public function getCreateTime()
  {
    return $this->createTime;
  }

  public function setExpirationTime($expirationTime)
  {
    $this->expirationTime = $expirationTime;
  }

  public function getExpirationTime()
  {
    return $this->expirationTime;
  }

  public function setInstance($instance)
  {
    $this->instance = $instance;
  }

  public function getInstance()
  {
    return $this->instance;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSha1Fingerprint($sha1Fingerprint)
  {
    $this->sha1Fingerprint = $sha1Fingerprint;
  }

  public function getSha1Fingerprint()
  {
    return $this->sha1Fingerprint;
  }
}
