<?php 
namespace Google\Service\SQLAdmin;
class SslCertsInsertRequest extends \Google\Model
{
  public $commonName;

  public function setCommonName($commonName)
  {
    $this->commonName = $commonName;
  }

  public function getCommonName()
  {
    return $this->commonName;
  }
}
