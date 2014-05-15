<?php 
namespace Google\Service\SiteVerification;
class SiteVerificationWebResourceGettokenRequest extends \Google\Model
{
  protected $siteType = 'Google\Service\SiteVerification\SiteVerificationWebResourceGettokenRequestSite';
  protected $siteDataType = '';
  public $verificationMethod;

  public function setSite(\Google\Service\SiteVerification\SiteVerificationWebResourceGettokenRequestSite $site)
  {
    $this->site = $site;
  }

  public function getSite()
  {
    return $this->site;
  }

  public function setVerificationMethod($verificationMethod)
  {
    $this->verificationMethod = $verificationMethod;
  }

  public function getVerificationMethod()
  {
    return $this->verificationMethod;
  }
}
