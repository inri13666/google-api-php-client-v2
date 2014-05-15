<?php 
namespace Google\Service\Spectrum;
class SpectrumSchedule extends \Google\Collection
{
  protected $eventTimeType = 'Google\Service\Spectrum\EventTime';
  protected $eventTimeDataType = '';
  protected $spectraType = 'Google\Service\Spectrum\SpectrumMessage';
  protected $spectraDataType = 'array';

  public function setEventTime(\Google\Service\Spectrum\EventTime $eventTime)
  {
    $this->eventTime = $eventTime;
  }

  public function getEventTime()
  {
    return $this->eventTime;
  }

  public function setSpectra($spectra)
  {
    $this->spectra = $spectra;
  }

  public function getSpectra()
  {
    return $this->spectra;
  }
}
