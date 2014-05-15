<?php 
namespace Google\Service\YouTube;
class VideoRecordingDetails extends \Google\Model
{
  protected $locationType = 'Google\Service\YouTube\GeoPoint';
  protected $locationDataType = '';
  public $locationDescription;
  public $recordingDate;

  public function setLocation(\Google\Service\YouTube\GeoPoint $location)
  {
    $this->location = $location;
  }

  public function getLocation()
  {
    return $this->location;
  }

  public function setLocationDescription($locationDescription)
  {
    $this->locationDescription = $locationDescription;
  }

  public function getLocationDescription()
  {
    return $this->locationDescription;
  }

  public function setRecordingDate($recordingDate)
  {
    $this->recordingDate = $recordingDate;
  }

  public function getRecordingDate()
  {
    return $this->recordingDate;
  }
}
