<?php 
namespace Google\Service\Spectrum;
class DeviceCapabilities extends \Google\Collection
{
  protected $frequencyRangesType = 'Google\Service\Spectrum\FrequencyRange';
  protected $frequencyRangesDataType = 'array';

  public function setFrequencyRanges($frequencyRanges)
  {
    $this->frequencyRanges = $frequencyRanges;
  }

  public function getFrequencyRanges()
  {
    return $this->frequencyRanges;
  }
}
