<?php 
namespace Google\Service\QPXExpress;
class SliceInfo extends \Google\Collection
{
  public $duration;
  public $kind;
  protected $segmentType = 'Google\Service\QPXExpress\SegmentInfo';
  protected $segmentDataType = 'array';

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSegment($segment)
  {
    $this->segment = $segment;
  }

  public function getSegment()
  {
    return $this->segment;
  }
}
