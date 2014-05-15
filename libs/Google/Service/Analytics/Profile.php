<?php 
namespace Google\Service\Analytics;
class Profile extends \Google\Model
{
  public $accountId;
  protected $childLinkType = 'Google\Service\Analytics\ProfileChildLink';
  protected $childLinkDataType = '';
  public $created;
  public $currency;
  public $defaultPage;
  public $eCommerceTracking;
  public $excludeQueryParameters;
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $name;
  protected $parentLinkType = 'Google\Service\Analytics\ProfileParentLink';
  protected $parentLinkDataType = '';
  protected $permissionsType = 'Google\Service\Analytics\ProfilePermissions';
  protected $permissionsDataType = '';
  public $selfLink;
  public $siteSearchCategoryParameters;
  public $siteSearchQueryParameters;
  public $stripSiteSearchCategoryParameters;
  public $stripSiteSearchQueryParameters;
  public $timezone;
  public $type;
  public $updated;
  public $webPropertyId;
  public $websiteUrl;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setChildLink(\Google\Service\Analytics\ProfileChildLink $childLink)
  {
    $this->childLink = $childLink;
  }

  public function getChildLink()
  {
    return $this->childLink;
  }

  public function setCreated($created)
  {
    $this->created = $created;
  }

  public function getCreated()
  {
    return $this->created;
  }

  public function setCurrency($currency)
  {
    $this->currency = $currency;
  }

  public function getCurrency()
  {
    return $this->currency;
  }

  public function setDefaultPage($defaultPage)
  {
    $this->defaultPage = $defaultPage;
  }

  public function getDefaultPage()
  {
    return $this->defaultPage;
  }

  public function setECommerceTracking($eCommerceTracking)
  {
    $this->eCommerceTracking = $eCommerceTracking;
  }

  public function getECommerceTracking()
  {
    return $this->eCommerceTracking;
  }

  public function setExcludeQueryParameters($excludeQueryParameters)
  {
    $this->excludeQueryParameters = $excludeQueryParameters;
  }

  public function getExcludeQueryParameters()
  {
    return $this->excludeQueryParameters;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInternalWebPropertyId($internalWebPropertyId)
  {
    $this->internalWebPropertyId = $internalWebPropertyId;
  }

  public function getInternalWebPropertyId()
  {
    return $this->internalWebPropertyId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setParentLink(\Google\Service\Analytics\ProfileParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
  }

  public function setPermissions(\Google\Service\Analytics\ProfilePermissions $permissions)
  {
    $this->permissions = $permissions;
  }

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSiteSearchCategoryParameters($siteSearchCategoryParameters)
  {
    $this->siteSearchCategoryParameters = $siteSearchCategoryParameters;
  }

  public function getSiteSearchCategoryParameters()
  {
    return $this->siteSearchCategoryParameters;
  }

  public function setSiteSearchQueryParameters($siteSearchQueryParameters)
  {
    $this->siteSearchQueryParameters = $siteSearchQueryParameters;
  }

  public function getSiteSearchQueryParameters()
  {
    return $this->siteSearchQueryParameters;
  }

  public function setStripSiteSearchCategoryParameters($stripSiteSearchCategoryParameters)
  {
    $this->stripSiteSearchCategoryParameters = $stripSiteSearchCategoryParameters;
  }

  public function getStripSiteSearchCategoryParameters()
  {
    return $this->stripSiteSearchCategoryParameters;
  }

  public function setStripSiteSearchQueryParameters($stripSiteSearchQueryParameters)
  {
    $this->stripSiteSearchQueryParameters = $stripSiteSearchQueryParameters;
  }

  public function getStripSiteSearchQueryParameters()
  {
    return $this->stripSiteSearchQueryParameters;
  }

  public function setTimezone($timezone)
  {
    $this->timezone = $timezone;
  }

  public function getTimezone()
  {
    return $this->timezone;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setWebPropertyId($webPropertyId)
  {
    $this->webPropertyId = $webPropertyId;
  }

  public function getWebPropertyId()
  {
    return $this->webPropertyId;
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
