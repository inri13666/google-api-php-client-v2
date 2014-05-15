<?php 
namespace Google\Service\SQLAdmin;
class Settings extends \Google\Collection
{
  public $activationPolicy;
  public $authorizedGaeApplications;
  protected $backupConfigurationType = 'Google\Service\SQLAdmin\BackupConfiguration';
  protected $backupConfigurationDataType = 'array';
  protected $databaseFlagsType = 'Google\Service\SQLAdmin\DatabaseFlags';
  protected $databaseFlagsDataType = 'array';
  protected $ipConfigurationType = 'Google\Service\SQLAdmin\IpConfiguration';
  protected $ipConfigurationDataType = '';
  public $kind;
  protected $locationPreferenceType = 'Google\Service\SQLAdmin\LocationPreference';
  protected $locationPreferenceDataType = '';
  public $pricingPlan;
  public $replicationType;
  public $settingsVersion;
  public $tier;

  public function setActivationPolicy($activationPolicy)
  {
    $this->activationPolicy = $activationPolicy;
  }

  public function getActivationPolicy()
  {
    return $this->activationPolicy;
  }

  public function setAuthorizedGaeApplications($authorizedGaeApplications)
  {
    $this->authorizedGaeApplications = $authorizedGaeApplications;
  }

  public function getAuthorizedGaeApplications()
  {
    return $this->authorizedGaeApplications;
  }

  public function setBackupConfiguration($backupConfiguration)
  {
    $this->backupConfiguration = $backupConfiguration;
  }

  public function getBackupConfiguration()
  {
    return $this->backupConfiguration;
  }

  public function setDatabaseFlags($databaseFlags)
  {
    $this->databaseFlags = $databaseFlags;
  }

  public function getDatabaseFlags()
  {
    return $this->databaseFlags;
  }

  public function setIpConfiguration(\Google\Service\SQLAdmin\IpConfiguration $ipConfiguration)
  {
    $this->ipConfiguration = $ipConfiguration;
  }

  public function getIpConfiguration()
  {
    return $this->ipConfiguration;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocationPreference(\Google\Service\SQLAdmin\LocationPreference $locationPreference)
  {
    $this->locationPreference = $locationPreference;
  }

  public function getLocationPreference()
  {
    return $this->locationPreference;
  }

  public function setPricingPlan($pricingPlan)
  {
    $this->pricingPlan = $pricingPlan;
  }

  public function getPricingPlan()
  {
    return $this->pricingPlan;
  }

  public function setReplicationType($replicationType)
  {
    $this->replicationType = $replicationType;
  }

  public function getReplicationType()
  {
    return $this->replicationType;
  }

  public function setSettingsVersion($settingsVersion)
  {
    $this->settingsVersion = $settingsVersion;
  }

  public function getSettingsVersion()
  {
    return $this->settingsVersion;
  }

  public function setTier($tier)
  {
    $this->tier = $tier;
  }

  public function getTier()
  {
    return $this->tier;
  }
}
