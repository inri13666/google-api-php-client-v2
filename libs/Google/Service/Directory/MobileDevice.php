<?php 
namespace Google\Service\Directory;
class MobileDevice extends \Google\Collection
{
  protected $applicationsType = 'Google\Service\Directory\MobileDeviceApplications';
  protected $applicationsDataType = 'array';
  public $deviceId;
  public $email;
  public $etag;
  public $firstSync;
  public $hardwareId;
  public $kind;
  public $lastSync;
  public $model;
  public $name;
  public $os;
  public $resourceId;
  public $status;
  public $type;
  public $userAgent;

  public function setApplications($applications)
  {
    $this->applications = $applications;
  }

  public function getApplications()
  {
    return $this->applications;
  }

  public function setDeviceId($deviceId)
  {
    $this->deviceId = $deviceId;
  }

  public function getDeviceId()
  {
    return $this->deviceId;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setFirstSync($firstSync)
  {
    $this->firstSync = $firstSync;
  }

  public function getFirstSync()
  {
    return $this->firstSync;
  }

  public function setHardwareId($hardwareId)
  {
    $this->hardwareId = $hardwareId;
  }

  public function getHardwareId()
  {
    return $this->hardwareId;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLastSync($lastSync)
  {
    $this->lastSync = $lastSync;
  }

  public function getLastSync()
  {
    return $this->lastSync;
  }

  public function setModel($model)
  {
    $this->model = $model;
  }

  public function getModel()
  {
    return $this->model;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setOs($os)
  {
    $this->os = $os;
  }

  public function getOs()
  {
    return $this->os;
  }

  public function setResourceId($resourceId)
  {
    $this->resourceId = $resourceId;
  }

  public function getResourceId()
  {
    return $this->resourceId;
  }

  public function setStatus($status)
  {
    $this->status = $status;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setUserAgent($userAgent)
  {
    $this->userAgent = $userAgent;
  }

  public function getUserAgent()
  {
    return $this->userAgent;
  }
}
