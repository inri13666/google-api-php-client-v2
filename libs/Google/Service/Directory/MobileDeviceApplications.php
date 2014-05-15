<?php 
namespace Google\Service\Directory;
class MobileDeviceApplications extends \Google\Collection
{
  public $displayName;
  public $packageName;
  public $permission;
  public $versionCode;
  public $versionName;

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setPackageName($packageName)
  {
    $this->packageName = $packageName;
  }

  public function getPackageName()
  {
    return $this->packageName;
  }

  public function setPermission($permission)
  {
    $this->permission = $permission;
  }

  public function getPermission()
  {
    return $this->permission;
  }

  public function setVersionCode($versionCode)
  {
    $this->versionCode = $versionCode;
  }

  public function getVersionCode()
  {
    return $this->versionCode;
  }

  public function setVersionName($versionName)
  {
    $this->versionName = $versionName;
  }

  public function getVersionName()
  {
    return $this->versionName;
  }
}
