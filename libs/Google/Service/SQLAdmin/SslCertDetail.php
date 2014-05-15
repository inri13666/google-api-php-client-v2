<?php 
namespace Google\Service\SQLAdmin;
class SslCertDetail extends \Google\Model
{
  protected $certInfoType = 'Google\Service\SQLAdmin\SslCert';
  protected $certInfoDataType = '';
  public $certPrivateKey;

  public function setCertInfo(\Google\Service\SQLAdmin\SslCert $certInfo)
  {
    $this->certInfo = $certInfo;
  }

  public function getCertInfo()
  {
    return $this->certInfo;
  }

  public function setCertPrivateKey($certPrivateKey)
  {
    $this->certPrivateKey = $certPrivateKey;
  }

  public function getCertPrivateKey()
  {
    return $this->certPrivateKey;
  }
}
