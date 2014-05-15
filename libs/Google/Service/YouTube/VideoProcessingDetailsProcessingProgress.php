<?php 
namespace Google\Service\YouTube;
class VideoProcessingDetailsProcessingProgress extends \Google\Model
{
  public $partsProcessed;
  public $partsTotal;
  public $timeLeftMs;

  public function setPartsProcessed($partsProcessed)
  {
    $this->partsProcessed = $partsProcessed;
  }

  public function getPartsProcessed()
  {
    return $this->partsProcessed;
  }

  public function setPartsTotal($partsTotal)
  {
    $this->partsTotal = $partsTotal;
  }

  public function getPartsTotal()
  {
    return $this->partsTotal;
  }

  public function setTimeLeftMs($timeLeftMs)
  {
    $this->timeLeftMs = $timeLeftMs;
  }

  public function getTimeLeftMs()
  {
    return $this->timeLeftMs;
  }
}
