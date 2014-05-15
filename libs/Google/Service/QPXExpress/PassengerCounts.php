<?php 
namespace Google\Service\QPXExpress;
class PassengerCounts extends \Google\Model
{
  public $adultCount;
  public $childCount;
  public $infantInLapCount;
  public $infantInSeatCount;
  public $kind;
  public $seniorCount;

  public function setAdultCount($adultCount)
  {
    $this->adultCount = $adultCount;
  }

  public function getAdultCount()
  {
    return $this->adultCount;
  }

  public function setChildCount($childCount)
  {
    $this->childCount = $childCount;
  }

  public function getChildCount()
  {
    return $this->childCount;
  }

  public function setInfantInLapCount($infantInLapCount)
  {
    $this->infantInLapCount = $infantInLapCount;
  }

  public function getInfantInLapCount()
  {
    return $this->infantInLapCount;
  }

  public function setInfantInSeatCount($infantInSeatCount)
  {
    $this->infantInSeatCount = $infantInSeatCount;
  }

  public function getInfantInSeatCount()
  {
    return $this->infantInSeatCount;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setSeniorCount($seniorCount)
  {
    $this->seniorCount = $seniorCount;
  }

  public function getSeniorCount()
  {
    return $this->seniorCount;
  }
}
