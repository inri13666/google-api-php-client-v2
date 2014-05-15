<?php 
namespace Google\Service\Drive;
class About extends \Google\Collection
{
  protected $additionalRoleInfoType = 'Google\Service\Drive\AboutAdditionalRoleInfo';
  protected $additionalRoleInfoDataType = 'array';
  public $domainSharingPolicy;
  public $etag;
  protected $exportFormatsType = 'Google\Service\Drive\AboutExportFormats';
  protected $exportFormatsDataType = 'array';
  protected $featuresType = 'Google\Service\Drive\AboutFeatures';
  protected $featuresDataType = 'array';
  protected $importFormatsType = 'Google\Service\Drive\AboutImportFormats';
  protected $importFormatsDataType = 'array';
  public $isCurrentAppInstalled;
  public $kind;
  public $languageCode;
  public $largestChangeId;
  protected $maxUploadSizesType = 'Google\Service\Drive\AboutMaxUploadSizes';
  protected $maxUploadSizesDataType = 'array';
  public $name;
  public $permissionId;
  protected $quotaBytesByServiceType = 'Google\Service\Drive\AboutQuotaBytesByService';
  protected $quotaBytesByServiceDataType = 'array';
  public $quotaBytesTotal;
  public $quotaBytesUsed;
  public $quotaBytesUsedAggregate;
  public $quotaBytesUsedInTrash;
  public $remainingChangeIds;
  public $rootFolderId;
  public $selfLink;
  protected $userType = 'Google\Service\Drive\User';
  protected $userDataType = '';

  public function setAdditionalRoleInfo($additionalRoleInfo)
  {
    $this->additionalRoleInfo = $additionalRoleInfo;
  }

  public function getAdditionalRoleInfo()
  {
    return $this->additionalRoleInfo;
  }

  public function setDomainSharingPolicy($domainSharingPolicy)
  {
    $this->domainSharingPolicy = $domainSharingPolicy;
  }

  public function getDomainSharingPolicy()
  {
    return $this->domainSharingPolicy;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setExportFormats($exportFormats)
  {
    $this->exportFormats = $exportFormats;
  }

  public function getExportFormats()
  {
    return $this->exportFormats;
  }

  public function setFeatures($features)
  {
    $this->features = $features;
  }

  public function getFeatures()
  {
    return $this->features;
  }

  public function setImportFormats($importFormats)
  {
    $this->importFormats = $importFormats;
  }

  public function getImportFormats()
  {
    return $this->importFormats;
  }

  public function setIsCurrentAppInstalled($isCurrentAppInstalled)
  {
    $this->isCurrentAppInstalled = $isCurrentAppInstalled;
  }

  public function getIsCurrentAppInstalled()
  {
    return $this->isCurrentAppInstalled;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLanguageCode($languageCode)
  {
    $this->languageCode = $languageCode;
  }

  public function getLanguageCode()
  {
    return $this->languageCode;
  }

  public function setLargestChangeId($largestChangeId)
  {
    $this->largestChangeId = $largestChangeId;
  }

  public function getLargestChangeId()
  {
    return $this->largestChangeId;
  }

  public function setMaxUploadSizes($maxUploadSizes)
  {
    $this->maxUploadSizes = $maxUploadSizes;
  }

  public function getMaxUploadSizes()
  {
    return $this->maxUploadSizes;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setPermissionId($permissionId)
  {
    $this->permissionId = $permissionId;
  }

  public function getPermissionId()
  {
    return $this->permissionId;
  }

  public function setQuotaBytesByService($quotaBytesByService)
  {
    $this->quotaBytesByService = $quotaBytesByService;
  }

  public function getQuotaBytesByService()
  {
    return $this->quotaBytesByService;
  }

  public function setQuotaBytesTotal($quotaBytesTotal)
  {
    $this->quotaBytesTotal = $quotaBytesTotal;
  }

  public function getQuotaBytesTotal()
  {
    return $this->quotaBytesTotal;
  }

  public function setQuotaBytesUsed($quotaBytesUsed)
  {
    $this->quotaBytesUsed = $quotaBytesUsed;
  }

  public function getQuotaBytesUsed()
  {
    return $this->quotaBytesUsed;
  }

  public function setQuotaBytesUsedAggregate($quotaBytesUsedAggregate)
  {
    $this->quotaBytesUsedAggregate = $quotaBytesUsedAggregate;
  }

  public function getQuotaBytesUsedAggregate()
  {
    return $this->quotaBytesUsedAggregate;
  }

  public function setQuotaBytesUsedInTrash($quotaBytesUsedInTrash)
  {
    $this->quotaBytesUsedInTrash = $quotaBytesUsedInTrash;
  }

  public function getQuotaBytesUsedInTrash()
  {
    return $this->quotaBytesUsedInTrash;
  }

  public function setRemainingChangeIds($remainingChangeIds)
  {
    $this->remainingChangeIds = $remainingChangeIds;
  }

  public function getRemainingChangeIds()
  {
    return $this->remainingChangeIds;
  }

  public function setRootFolderId($rootFolderId)
  {
    $this->rootFolderId = $rootFolderId;
  }

  public function getRootFolderId()
  {
    return $this->rootFolderId;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUser(\Google\Service\Drive\User $user)
  {
    $this->user = $user;
  }

  public function getUser()
  {
    return $this->user;
  }
}
