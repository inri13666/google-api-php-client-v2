<?php 
namespace Google\Service\Orkut;
class Badge extends \Google\Model
{
  public $badgeLargeLogo;
  public $badgeSmallLogo;
  public $caption;
  public $description;
  public $id;
  public $kind;
  public $sponsorLogo;
  public $sponsorName;
  public $sponsorUrl;

  public function setBadgeLargeLogo($badgeLargeLogo)
  {
    $this->badgeLargeLogo = $badgeLargeLogo;
  }

  public function getBadgeLargeLogo()
  {
    return $this->badgeLargeLogo;
  }

  public function setBadgeSmallLogo($badgeSmallLogo)
  {
    $this->badgeSmallLogo = $badgeSmallLogo;
  }

  public function getBadgeSmallLogo()
  {
    return $this->badgeSmallLogo;
  }

  public function setCaption($caption)
  {
    $this->caption = $caption;
  }

  public function getCaption()
  {
    return $this->caption;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSponsorLogo($sponsorLogo)
  {
    $this->sponsorLogo = $sponsorLogo;
  }

  public function getSponsorLogo()
  {
    return $this->sponsorLogo;
  }

  public function setSponsorName($sponsorName)
  {
    $this->sponsorName = $sponsorName;
  }

  public function getSponsorName()
  {
    return $this->sponsorName;
  }

  public function setSponsorUrl($sponsorUrl)
  {
    $this->sponsorUrl = $sponsorUrl;
  }

  public function getSponsorUrl()
  {
    return $this->sponsorUrl;
  }
}
