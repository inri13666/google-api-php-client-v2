<?php 
namespace Google\Service\Analytics;
class Webproperty extends \Google\Model
{
  public $accountId;
  protected $childLinkType = 'Google\Service\Analytics\WebpropertyChildLink';
  protected $childLinkDataType = '';
  public $created;
  public $defaultProfileId;
  public $id;
  public $industryVertical;
  public $internalWebPropertyId;
  public $kind;
  public $level;
  public $name;
  protected $parentLinkType = 'Google\Service\Analytics\WebpropertyParentLink';
  protected $parentLinkDataType = '';
  protected $permissionsType = 'Google\Service\Analytics\WebpropertyPermissions';
  protected $permissionsDataType = '';
  public $profileCount;
  public $selfLink;
  public $updated;
  public $websiteUrl;

  public function setAccountId($accountId)
  {
    $this->accountId = $accountId;
  }

  public function getAccountId()
  {
    return $this->accountId;
  }

  public function setChildLink(\Google\Service\Analytics\WebpropertyChildLink $childLink)
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

  public function setDefaultProfileId($defaultProfileId)
  {
    $this->defaultProfileId = $defaultProfileId;
  }

  public function getDefaultProfileId()
  {
    return $this->defaultProfileId;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setIndustryVertical($industryVertical)
  {
    $this->industryVertical = $industryVertical;
  }

  public function getIndustryVertical()
  {
    return $this->industryVertical;
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

  public function setLevel($level)
  {
    $this->level = $level;
  }

  public function getLevel()
  {
    return $this->level;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setParentLink(\Google\Service\Analytics\WebpropertyParentLink $parentLink)
  {
    $this->parentLink = $parentLink;
  }

  public function getParentLink()
  {
    return $this->parentLink;
  }

  public function setPermissions(\Google\Service\Analytics\WebpropertyPermissions $permissions)
  {
    $this->permissions = $permissions;
  }

  public function getPermissions()
  {
    return $this->permissions;
  }

  public function setProfileCount($profileCount)
  {
    $this->profileCount = $profileCount;
  }

  public function getProfileCount()
  {
    return $this->profileCount;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getUpdated()
  {
    return $this->updated;
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
