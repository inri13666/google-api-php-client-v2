<?php 
namespace Google\Service\QPXExpress;
class SegmentInfo extends \Google\Collection
{
  public $bookingCode;
  public $bookingCodeCount;
  public $cabin;
  public $connectionDuration;
  public $duration;
  protected $flightType = 'Google\Service\QPXExpress\FlightInfo';
  protected $flightDataType = '';
  public $id;
  public $kind;
  protected $legType = 'Google\Service\QPXExpress\LegInfo';
  protected $legDataType = 'array';
  public $marriedSegmentGroup;
  public $subjectToGovernmentApproval;

  public function setBookingCode($bookingCode)
  {
    $this->bookingCode = $bookingCode;
  }

  public function getBookingCode()
  {
    return $this->bookingCode;
  }

  public function setBookingCodeCount($bookingCodeCount)
  {
    $this->bookingCodeCount = $bookingCodeCount;
  }

  public function getBookingCodeCount()
  {
    return $this->bookingCodeCount;
  }

  public function setCabin($cabin)
  {
    $this->cabin = $cabin;
  }

  public function getCabin()
  {
    return $this->cabin;
  }

  public function setConnectionDuration($connectionDuration)
  {
    $this->connectionDuration = $connectionDuration;
  }

  public function getConnectionDuration()
  {
    return $this->connectionDuration;
  }

  public function setDuration($duration)
  {
    $this->duration = $duration;
  }

  public function getDuration()
  {
    return $this->duration;
  }

  public function setFlight(\Google\Service\QPXExpress\FlightInfo $flight)
  {
    $this->flight = $flight;
  }

  public function getFlight()
  {
    return $this->flight;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLeg($leg)
  {
    $this->leg = $leg;
  }

  public function getLeg()
  {
    return $this->leg;
  }

  public function setMarriedSegmentGroup($marriedSegmentGroup)
  {
    $this->marriedSegmentGroup = $marriedSegmentGroup;
  }

  public function getMarriedSegmentGroup()
  {
    return $this->marriedSegmentGroup;
  }

  public function setSubjectToGovernmentApproval($subjectToGovernmentApproval)
  {
    $this->subjectToGovernmentApproval = $subjectToGovernmentApproval;
  }

  public function getSubjectToGovernmentApproval()
  {
    return $this->subjectToGovernmentApproval;
  }
}
