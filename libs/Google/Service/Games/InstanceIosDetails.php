<?php 
namespace Google\Service\Games;
class InstanceIosDetails extends \Google\Model
{
  public $bundleIdentifier;
  public $itunesAppId;
  public $kind;
  public $preferredForIpad;
  public $preferredForIphone;
  public $supportIpad;
  public $supportIphone;

  public function setBundleIdentifier($bundleIdentifier)
  {
    $this->bundleIdentifier = $bundleIdentifier;
  }

  public function getBundleIdentifier()
  {
    return $this->bundleIdentifier;
  }

  public function setItunesAppId($itunesAppId)
  {
    $this->itunesAppId = $itunesAppId;
  }

  public function getItunesAppId()
  {
    return $this->itunesAppId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setPreferredForIpad($preferredForIpad)
  {
    $this->preferredForIpad = $preferredForIpad;
  }

  public function getPreferredForIpad()
  {
    return $this->preferredForIpad;
  }

  public function setPreferredForIphone($preferredForIphone)
  {
    $this->preferredForIphone = $preferredForIphone;
  }

  public function getPreferredForIphone()
  {
    return $this->preferredForIphone;
  }

  public function setSupportIpad($supportIpad)
  {
    $this->supportIpad = $supportIpad;
  }

  public function getSupportIpad()
  {
    return $this->supportIpad;
  }

  public function setSupportIphone($supportIphone)
  {
    $this->supportIphone = $supportIphone;
  }

  public function getSupportIphone()
  {
    return $this->supportIphone;
  }
}
