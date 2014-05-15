<?php 
namespace Google\Service\Doubleclicksearch;
class UpdateAvailabilityRequest extends \Google\Collection
{
  protected $availabilitiesType = 'Google\Service\Doubleclicksearch\Availability';
  protected $availabilitiesDataType = 'array';

  public function setAvailabilities($availabilities)
  {
    $this->availabilities = $availabilities;
  }

  public function getAvailabilities()
  {
    return $this->availabilities;
  }
}
