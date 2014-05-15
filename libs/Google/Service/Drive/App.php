<?php 
namespace Google\Service\Drive;
class App extends \Google\Collection
{
  public $authorized;
  public $createInFolderTemplate;
  public $createUrl;
  public $hasDriveWideScope;
  protected $iconsType = 'Google\Service\Drive\AppIcons';
  protected $iconsDataType = 'array';
  public $id;
  public $installed;
  public $kind;
  public $longDescription;
  public $name;
  public $objectType;
  public $openUrlTemplate;
  public $primaryFileExtensions;
  public $primaryMimeTypes;
  public $productId;
  public $productUrl;
  public $secondaryFileExtensions;
  public $secondaryMimeTypes;
  public $shortDescription;
  public $supportsCreate;
  public $supportsImport;
  public $supportsMultiOpen;
  public $supportsOfflineCreate;
  public $useByDefault;

  public function setAuthorized($authorized)
  {
    $this->authorized = $authorized;
  }

  public function getAuthorized()
  {
    return $this->authorized;
  }

  public function setCreateInFolderTemplate($createInFolderTemplate)
  {
    $this->createInFolderTemplate = $createInFolderTemplate;
  }

  public function getCreateInFolderTemplate()
  {
    return $this->createInFolderTemplate;
  }

  public function setCreateUrl($createUrl)
  {
    $this->createUrl = $createUrl;
  }

  public function getCreateUrl()
  {
    return $this->createUrl;
  }

  public function setHasDriveWideScope($hasDriveWideScope)
  {
    $this->hasDriveWideScope = $hasDriveWideScope;
  }

  public function getHasDriveWideScope()
  {
    return $this->hasDriveWideScope;
  }

  public function setIcons($icons)
  {
    $this->icons = $icons;
  }

  public function getIcons()
  {
    return $this->icons;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setInstalled($installed)
  {
    $this->installed = $installed;
  }

  public function getInstalled()
  {
    return $this->installed;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLongDescription($longDescription)
  {
    $this->longDescription = $longDescription;
  }

  public function getLongDescription()
  {
    return $this->longDescription;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setObjectType($objectType)
  {
    $this->objectType = $objectType;
  }

  public function getObjectType()
  {
    return $this->objectType;
  }

  public function setOpenUrlTemplate($openUrlTemplate)
  {
    $this->openUrlTemplate = $openUrlTemplate;
  }

  public function getOpenUrlTemplate()
  {
    return $this->openUrlTemplate;
  }

  public function setPrimaryFileExtensions($primaryFileExtensions)
  {
    $this->primaryFileExtensions = $primaryFileExtensions;
  }

  public function getPrimaryFileExtensions()
  {
    return $this->primaryFileExtensions;
  }

  public function setPrimaryMimeTypes($primaryMimeTypes)
  {
    $this->primaryMimeTypes = $primaryMimeTypes;
  }

  public function getPrimaryMimeTypes()
  {
    return $this->primaryMimeTypes;
  }

  public function setProductId($productId)
  {
    $this->productId = $productId;
  }

  public function getProductId()
  {
    return $this->productId;
  }

  public function setProductUrl($productUrl)
  {
    $this->productUrl = $productUrl;
  }

  public function getProductUrl()
  {
    return $this->productUrl;
  }

  public function setSecondaryFileExtensions($secondaryFileExtensions)
  {
    $this->secondaryFileExtensions = $secondaryFileExtensions;
  }

  public function getSecondaryFileExtensions()
  {
    return $this->secondaryFileExtensions;
  }

  public function setSecondaryMimeTypes($secondaryMimeTypes)
  {
    $this->secondaryMimeTypes = $secondaryMimeTypes;
  }

  public function getSecondaryMimeTypes()
  {
    return $this->secondaryMimeTypes;
  }

  public function setShortDescription($shortDescription)
  {
    $this->shortDescription = $shortDescription;
  }

  public function getShortDescription()
  {
    return $this->shortDescription;
  }

  public function setSupportsCreate($supportsCreate)
  {
    $this->supportsCreate = $supportsCreate;
  }

  public function getSupportsCreate()
  {
    return $this->supportsCreate;
  }

  public function setSupportsImport($supportsImport)
  {
    $this->supportsImport = $supportsImport;
  }

  public function getSupportsImport()
  {
    return $this->supportsImport;
  }

  public function setSupportsMultiOpen($supportsMultiOpen)
  {
    $this->supportsMultiOpen = $supportsMultiOpen;
  }

  public function getSupportsMultiOpen()
  {
    return $this->supportsMultiOpen;
  }

  public function setSupportsOfflineCreate($supportsOfflineCreate)
  {
    $this->supportsOfflineCreate = $supportsOfflineCreate;
  }

  public function getSupportsOfflineCreate()
  {
    return $this->supportsOfflineCreate;
  }

  public function setUseByDefault($useByDefault)
  {
    $this->useByDefault = $useByDefault;
  }

  public function getUseByDefault()
  {
    return $this->useByDefault;
  }
}
