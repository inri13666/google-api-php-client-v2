<?php 
namespace Google\Service\YouTube;
class InvideoTiming extends \Google\Model
{
  public $durationMs;
  public $offsetMs;
  public $type;

  public function setDurationMs($durationMs)
  {
    $this->durationMs = $durationMs;
  }

  public function getDurationMs()
  {
    return $this->durationMs;
  }

  public function setOffsetMs($offsetMs)
  {
    $this->offsetMs = $offsetMs;
  }

  public function getOffsetMs()
  {
    return $this->offsetMs;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
