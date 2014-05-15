<?php 
namespace Google\Service\AdSenseHost;
class AssociationSession extends \Google\Collection
{
  public $accountId;
  public $id;
  public $kind;
  public $productCodes;
  public $redirectUrl;
  public $status;
  public $userLocale;
  public $websiteLocale;
  public $websiteUrl;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
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

  public function setProductCodes($productCodes)
  {
    $this->productCodes = $productCodes;
  }

  public function getProductCodes()
  {
    return $this->productCodes;
  }

  public function setRedirectUrl($redirectUrl)
  {
    $this->redirectUrl = $redirectUrl;
  }

  public function getRedirectUrl()
  {
    return $this->redirectUrl;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setUserLocale($userLocale)
  {
    $this->userLocale = $userLocale;
  }

  public function getUserLocale()
  {
    return $this->userLocale;
  }

  public function setWebsiteLocale($websiteLocale)
  {
    $this->websiteLocale = $websiteLocale;
  }

  public function getWebsiteLocale()
  {
    return $this->websiteLocale;
  }

  public function setWebsiteUrl($websiteUrl)
  {
    $this->websiteUrl = $websiteUrl;
  }

  public function getWebsiteUrl()
  {
    return $this->websiteUrl;
  }
}
