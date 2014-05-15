<?php 
namespace Google\Service\AdExchangeSeller;
class CustomChannelTargetingInfo extends \Google\Model
{
  public $adsAppearOn;
  public $description;
  public $location;
  public $siteLanguage;

  public function setAdsAppearOn($adsAppearOn)
  {
    $this->adsAppearOn = $adsAppearOn;
  }

  public function getAdsAppearOn()
  {
    return $this->adsAppearOn;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setLocation($location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setSiteLanguage($siteLanguage)
  {
    $this->siteLanguage = $siteLanguage;
  }

  public function getSiteLanguage()
  {
    return $this->siteLanguage;
  }
}
