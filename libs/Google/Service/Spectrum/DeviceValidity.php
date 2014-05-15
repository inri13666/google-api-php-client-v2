<?php 
namespace Google\Service\Spectrum;
class DeviceValidity extends \Google\Model
{
  protected $deviceDescType = 'Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescDataType = '';
  public $isValid;
  public $reason;

  public function setDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }

  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }

  public function setIsValid($isValid)
  {
    $this->isValid = $isValid;
  }

  public function getIsValid()
  {
    return $this->isValid;
  }

  public function setReason($reason)
  {
    $this->reason = $reason;
  }

  public function getReason()
  {
    return $this->reason;
  }
}
