<?php 
namespace Google\Service\Directory;
class UserAddress extends \Google\Model
{
  public $country;
  public $countryCode;
  public $customType;
  public $extendedAddress;
  public $formatted;
  public $locality;
  public $poBox;
  public $postalCode;
  public $primary;
  public $region;
  public $sourceIsStructured;
  public $streetAddress;
  public $type;

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }

  public function getCountryCode()
  {
    return $this->countryCode;
  }

  public function setCustomType($customType)
  {
    $this->customType = $customType;
  }

  public function getCustomType()
  {
    return $this->customType;
  }

  public function setExtendedAddress($extendedAddress)
  {
    $this->extendedAddress = $extendedAddress;
  }

  public function getExtendedAddress()
  {
    return $this->extendedAddress;
  }

  public function setFormatted($formatted)
  {
    $this->formatted = $formatted;
  }

  public function getFormatted()
  {
    return $this->formatted;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setPoBox($poBox)
  {
    $this->poBox = $poBox;
  }

  public function getPoBox()
  {
    return $this->poBox;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setPrimary($primary)
  {
    $this->primary = $primary;
  }

  public function getPrimary()
  {
    return $this->primary;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setSourceIsStructured($sourceIsStructured)
  {
    $this->sourceIsStructured = $sourceIsStructured;
  }

  public function getSourceIsStructured()
  {
    return $this->sourceIsStructured;
  }

  public function setStreetAddress($streetAddress)
  {
    $this->streetAddress = $streetAddress;
  }

  public function getStreetAddress()
  {
    return $this->streetAddress;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
