<?php 
namespace Google\Service\Spectrum;
class PawsNotifySpectrumUseRequest extends \Google\Collection
{
  protected $deviceDescType = 'Google\Service\Spectrum\DeviceDescriptor';
  protected $deviceDescDataType = '';
  protected $locationType = 'Google\Service\Spectrum\GeoLocation';
  protected $locationDataType = '';
  protected $spectraType = 'Google\Service\Spectrum\SpectrumMessage';
  protected $spectraDataType = 'array';
  public $type;
  public $version;

  public function setDeviceDesc(\Google\Service\Spectrum\DeviceDescriptor $deviceDesc)
  {
    $this->deviceDesc = $deviceDesc;
  }

  public function getDeviceDesc()
  {
    return $this->deviceDesc;
  }

  public function setLocation(\Google\Service\Spectrum\GeoLocation $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setSpectra($spectra)
  {
    $this->spectra = $spectra;
  }

  public function getSpectra()
  {
    return $this->spectra;
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
