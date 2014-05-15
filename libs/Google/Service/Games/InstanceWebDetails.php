<?php 
namespace Google\Service\Games;
class InstanceWebDetails extends \Google\Model
{
  public $kind;
  public $launchUrl;
  public $preferred;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLaunchUrl($launchUrl)
  {
    $this->launchUrl = $launchUrl;
  }

  public function getLaunchUrl()
  {
    return $this->launchUrl;
  }

  public function setPreferred($preferred)
  {
    $this->preferred = $preferred;
  }

  public function getPreferred()
  {
    return $this->preferred;
  }
}
