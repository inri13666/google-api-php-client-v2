<?php 
namespace Google\Service\Spectrum;
class SpectrumMessage extends \Google\Collection
{
  public $bandwidth;
  protected $frequencyRangesType = 'Google\Service\Spectrum\FrequencyRange';
  protected $frequencyRangesDataType = 'array';

  public function setBandwidth($bandwidth)
  {
    $this->bandwidth = $bandwidth;
  }

  public function getBandwidth()
  {
    return $this->bandwidth;
  }

  public function setFrequencyRanges($frequencyRanges)
  {
    $this->frequencyRanges = $frequencyRanges;
  }

  public function getFrequencyRanges()
  {
    return $this->frequencyRanges;
  }
}
