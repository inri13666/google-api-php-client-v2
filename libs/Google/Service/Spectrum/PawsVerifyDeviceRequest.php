<?php 
namespace Google\Service\Spectrum;
class PawsVerifyDeviceRequest extends \Google\Collection
{
  protected $deviceDescsType = 'Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescsDataType = 'array';
  public $type;
  public $version;

  public function setDeviceDescs($deviceDescs)
  {
    $this->deviceDescs = $deviceDescs;
  }

  public function getDeviceDescs()
  {
    return $this->deviceDescs;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setVersion($version)
  {
    $this->version = $version;
  }

  public function getVersion()
  {
    return $this->version;
  }
}
