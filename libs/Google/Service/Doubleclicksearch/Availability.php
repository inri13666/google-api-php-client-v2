<?php 
namespace Google\Service\Doubleclicksearch;
class Availability extends \Google\Model
{
  public $advertiserId;
  public $agencyId;
  public $availabilityTimestamp;
  public $segmentationId;
  public $segmentationName;
  public $segmentationType;

  public function setAdvertiserId($advertiserId)
  {
    $this->advertiserId = $advertiserId;
  }

  public function getAdvertiserId()
  {
    return $this->advertiserId;
  }

  public function setAgencyId($agencyId)
  {
    $this->agencyId = $agencyId;
  }

  public function getAgencyId()
  {
    return $this->agencyId;
  }

  public function setAvailabilityTimestamp($availabilityTimestamp)
  {
    $this->availabilityTimestamp = $availabilityTimestamp;
  }

  public function getAvailabilityTimestamp()
  {
    return $this->availabilityTimestamp;
  }

  public function setSegmentationId($segmentationId)
  {
    $this->segmentationId = $segmentationId;
  }

  public function getSegmentationId()
  {
    return $this->segmentationId;
  }

  public function setSegmentationName($segmentationName)
  {
    $this->segmentationName = $segmentationName;
  }

  public function getSegmentationName()
  {
    return $this->segmentationName;
  }

  public function setSegmentationType($segmentationType)
  {
    $this->segmentationType = $segmentationType;
  }

  public function getSegmentationType()
  {
    return $this->segmentationType;
  }
}
