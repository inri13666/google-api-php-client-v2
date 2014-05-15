<?php 
namespace Google\Service\Reseller;
class Seats extends \Google\Model
{
  public $kind;
  public $maximumNumberOfSeats;
  public $numberOfSeats;

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setMaximumNumberOfSeats($maximumNumberOfSeats)
  {
    $this->maximumNumberOfSeats = $maximumNumberOfSeats;
  }

  public function getMaximumNumberOfSeats()
  {
    return $this->maximumNumberOfSeats;
  }

  public function setNumberOfSeats($numberOfSeats)
  {
    $this->numberOfSeats = $numberOfSeats;
  }

  public function getNumberOfSeats()
  {
    return $this->numberOfSeats;
  }
}
