<?php 
namespace Google\Service\Reseller;
class SubscriptionTransferInfo extends \Google\Model
{
  public $minimumTransferableSeats;
  public $transferabilityExpirationTime;

  public function setMinimumTransferableSeats($minimumTransferableSeats)
  {
    $this->minimumTransferableSeats = $minimumTransferableSeats;
  }

  public function getMinimumTransferableSeats()
  {
    return $this->minimumTransferableSeats;
  }

  public function setTransferabilityExpirationTime($transferabilityExpirationTime)
  {
    $this->transferabilityExpirationTime = $transferabilityExpirationTime;
  }

  public function getTransferabilityExpirationTime()
  {
    return $this->transferabilityExpirationTime;
  }
}
