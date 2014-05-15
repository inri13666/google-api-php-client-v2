<?php 
namespace Google\Service\AdSense;
class AdUnitContentAdsSettings extends \Google\Model
{
  protected $backupOptionType = 'Google\Service\AdSense\AdUnitContentAdsSettingsBackupOption';
  protected $backupOptionDataType = '';
  public $size;
  public $type;

  public function setBackupOption(\Google\Service\AdSense\AdUnitContentAdsSettingsBackupOption $backupOption)
  {
    $this->backupOption = $backupOption;
  }

  public function getBackupOption()
  {
    return $this->backupOption;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
