<?php 
namespace Google\Service\QPXExpress;
class SegmentPricing extends \Google\Collection
{
  public $fareId;
  protected $freeBaggageOptionType = 'Google\Service\QPXExpress\FreeBaggageAllowance';
  protected $freeBaggageOptionDataType = 'array';
  public $kind;
  public $segmentId;

  public function setFareId($fareId)
  {
    $this->fareId = $fareId;
  }

  public function getFareId()
  {
    return $this->fareId;
  }

  public function setFreeBaggageOption($freeBaggageOption)
  {
    $this->freeBaggageOption = $freeBaggageOption;
  }

  public function getFreeBaggageOption()
  {
    return $this->freeBaggageOption;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSegmentId($segmentId)
  {
    $this->segmentId = $segmentId;
  }

  public function getSegmentId()
  {
    return $this->segmentId;
  }
}
