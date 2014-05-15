<?php 
namespace Google\Service\Compute;
class Project extends \Google\Collection
{
  protected $commonInstanceMetadataType = 'Google\Service\Compute\Metadata';
  protected $commonInstanceMetadataDataType = '';
  public $creationTimestamp;
  public $description;
  public $id;
  public $kind;
  public $name;
  protected $quotasType = 'Google\Service\Compute\Quota';
  protected $quotasDataType = 'array';
  public $selfLink;
  protected $usageExportLocationType = 'Google\Service\Compute\UsageExportLocation';
  protected $usageExportLocationDataType = '';

  public function setCommonInstanceMetadata(\Google\Service\Compute\Metadata $commonInstanceMetadata)
  {
    $this->commonInstanceMetadata = $commonInstanceMetadata;
  }

  public function getCommonInstanceMetadata()
  {
    return $this->commonInstanceMetadata;
  }

  public function setCreationTimestamp($creationTimestamp)
  {
    $this->creationTimestamp = $creationTimestamp;
  }

  public function getCreationTimestamp()
  {
    return $this->creationTimestamp;
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

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setQuotas($quotas)
  {
    $this->quotas = $quotas;
  }

  public function getQuotas()
  {
    return $this->quotas;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setUsageExportLocation(\Google\Service\Compute\UsageExportLocation $usageExportLocation)
  {
    $this->usageExportLocation = $usageExportLocation;
  }

  public function getUsageExportLocation()
  {
    return $this->usageExportLocation;
  }
}
