<?php 
namespace Google\Service\Spectrum;
class GeoSpectrumSchedule extends \Google\Collection
{
  protected $locationType = 'Google\Service\Spectrum\GeoLocation';
  protected $locationDataType = '';
  protected $spectrumSchedulesType = 'Google\Service\Spectrum\SpectrumSchedule';
  protected $spectrumSchedulesDataType = 'array';

  public function setLocation(\Google\Service\Spectrum\GeoLocation $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setSpectrumSchedules($spectrumSchedules)
  {
    $this->spectrumSchedules = $spectrumSchedules;
  }

  public function getSpectrumSchedules()
  {
    return $this->spectrumSchedules;
  }
}
