<?php 
namespace Google\Service\SQLAdmin;
class IpConfiguration extends \Google\Collection
{
  public $authorizedNetworks;
  public $enabled;
  public $requireSsl;

  public function setAuthorizedNetworks($authorizedNetworks)
  {
    $this->authorizedNetworks = $authorizedNetworks;
  }

  public function getAuthorizedNetworks()
  {
    return $this->authorizedNetworks;
  }

  public function setEnabled($enabled)
  {
    $this->enabled = $enabled;
  }

  public function getEnabled()
  {
    return $this->enabled;
  }

  public function setRequireSsl($requireSsl)
  {
    $this->requireSsl = $requireSsl;
  }

  public function getRequireSsl()
  {
    return $this->requireSsl;
  }
}
