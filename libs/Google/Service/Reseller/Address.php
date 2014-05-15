<?php 
namespace Google\Service\Reseller;
class Address extends \Google\Model
{
  public $addressLine1;
  public $addressLine2;
  public $addressLine3;
  public $contactName;
  public $countryCode;
  public $kind;
  public $locality;
  public $organizationName;
  public $postalCode;
  public $region;

  public function setAddressLine1($addressLine1)
  {
    $this->addressLine1 = $addressLine1;
  }

  public function getAddressLine1()
  {
    return $this->addressLine1;
  }

  public function setAddressLine2($addressLine2)
  {
    $this->addressLine2 = $addressLine2;
  }

  public function getAddressLine2()
  {
    return $this->addressLine2;
  }

  public function setAddressLine3($addressLine3)
  {
    $this->addressLine3 = $addressLine3;
  }

  public function getAddressLine3()
  {
    return $this->addressLine3;
  }

  public function setContactName($contactName)
  {
    $this->contactName = $contactName;
  }

  public function getContactName()
  {
    return $this->contactName;
  }

  public function setCountryCode($countryCode)
  {
    $this->countryCode = $countryCode;
  }

  public function getCountryCode()
  {
    return $this->countryCode;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setOrganizationName($organizationName)
  {
    $this->organizationName = $organizationName;
  }

  public function getOrganizationName()
  {
    return $this->organizationName;
  }

  public function setPostalCode($postalCode)
  {
    $this->postalCode = $postalCode;
  }

  public function getPostalCode()
  {
    return $this->postalCode;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }
}
