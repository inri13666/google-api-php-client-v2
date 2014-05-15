<?php 
namespace Google\Service\CivicInfo;
class SimpleAddressType extends \Google\Model
{
  public $city;
  public $line1;
  public $line2;
  public $line3;
  public $locationName;
  public $state;
  public $zip;

  public function setCity($city)
  {
    $this->city = $city;
  }

  public function getCity()
  {
    return $this->city;
  }

  public function setLine1($line1)
  {
    $this->line1 = $line1;
  }

  public function getLine1()
  {
    return $this->line1;
  }

  public function setLine2($line2)
  {
    $this->line2 = $line2;
  }

  public function getLine2()
  {
    return $this->line2;
  }

  public function setLine3($line3)
  {
    $this->line3 = $line3;
  }

  public function getLine3()
  {
    return $this->line3;
  }

  public function setLocationName($locationName)
  {
    $this->locationName = $locationName;
  }

  public function getLocationName()
  {
    return $this->locationName;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setZip($zip)
  {
    $this->zip = $zip;
  }

  public function getZip()
  {
    return $this->zip;
  }
}
