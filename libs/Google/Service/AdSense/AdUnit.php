<?php 
namespace Google\Service\AdSense;
class AdUnit extends \Google\Model
{
  public $code;
  protected $contentAdsSettingsType = 'Google\Service\AdSense\AdUnitContentAdsSettings';
  protected $contentAdsSettingsDataType = '';
  protected $customStyleType = 'Google\Service\AdSense\AdStyle';
  protected $customStyleDataType = '';
  protected $feedAdsSettingsType = 'Google\Service\AdSense\AdUnitFeedAdsSettings';
  protected $feedAdsSettingsDataType = '';
  public $id;
  public $kind;
  protected $mobileContentAdsSettingsType = 'Google\Service\AdSense\AdUnitMobileContentAdsSettings';
  protected $mobileContentAdsSettingsDataType = '';
  public $name;
  public $savedStyleId;
  public $status;

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setContentAdsSettings(\Google\Service\AdSense\AdUnitContentAdsSettings $contentAdsSettings)
  {
    $this->contentAdsSettings = $contentAdsSettings;
  }

  public function getContentAdsSettings()
  {
    return $this->contentAdsSettings;
  }

  public function setCustomStyle(\Google\Service\AdSense\AdStyle $customStyle)
  {
    $this->customStyle = $customStyle;
  }

  public function getCustomStyle()
  {
    return $this->customStyle;
  }

  public function setFeedAdsSettings(\Google\Service\AdSense\AdUnitFeedAdsSettings $feedAdsSettings)
  {
    $this->feedAdsSettings = $feedAdsSettings;
  }

  public function getFeedAdsSettings()
  {
    return $this->feedAdsSettings;
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

  public function setMobileContentAdsSettings(\Google\Service\AdSense\AdUnitMobileContentAdsSettings $mobileContentAdsSettings)
  {
    $this->mobileContentAdsSettings = $mobileContentAdsSettings;
  }

  public function getMobileContentAdsSettings()
  {
    return $this->mobileContentAdsSettings;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setSavedStyleId($savedStyleId)
  {
    $this->savedStyleId = $savedStyleId;
  }

  public function getSavedStyleId()
  {
    return $this->savedStyleId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }
}
