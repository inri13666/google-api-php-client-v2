<?php 
namespace Google\Service\SiteVerification;
class SiteVerificationWebResourceResource extends \Google\Collection
{
  public $id;
  public $owners;
  protected $siteType = 'Google\Service\SiteVerification\SiteVerificationWebResourceResourceSite';
  protected $siteDataType = '';

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setOwners($owners)
  {
    $this->owners = $owners;
  }

  public function getOwners()
  {
    return $this->owners;
  }

  public function setSite(\Google\Service\SiteVerification\SiteVerificationWebResourceResourceSite $site)
  {
    $this->site = $site;
  }

  public function getSite()
  {
    return $this->site;
  }
}
