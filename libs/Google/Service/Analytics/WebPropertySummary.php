<?php 
namespace Google\Service\Analytics;
class WebPropertySummary extends \Google\Collection
{
  public $id;
  public $internalWebPropertyId;
  public $kind;
  public $level;
  public $name;
  protected $profilesType = 'Google\Service\Analytics\ProfileSummary';
  protected $profilesDataType = 'array';
  public $websiteUrl;

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

  public function setProfiles($profiles)
  {
    $this->profiles = $profiles;
  }

  public function getProfiles()
  {
    return $this->profiles;
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
