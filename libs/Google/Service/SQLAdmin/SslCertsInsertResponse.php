<?php 
namespace Google\Service\SQLAdmin;
class SslCertsInsertResponse extends \Google\Model
{
  protected $clientCertType = 'Google\Service\SQLAdmin\SslCertDetail';
  protected $clientCertDataType = '';
  public $kind;
  protected $serverCaCertType = 'Google\Service\SQLAdmin\SslCert';
  protected $serverCaCertDataType = '';

  public function setClientCert(\Google\Service\SQLAdmin\SslCertDetail $clientCert)
  {
    $this->clientCert = $clientCert;
  }

  public function getClientCert()
  {
    return $this->clientCert;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setServerCaCert(\Google\Service\SQLAdmin\SslCert $serverCaCert)
  {
    $this->serverCaCert = $serverCaCert;
  }

  public function getServerCaCert()
  {
    return $this->serverCaCert;
  }
}
