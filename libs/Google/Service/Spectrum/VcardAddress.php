<?php 
namespace Google\Service\Spectrum;
class VcardAddress extends \Google\Model
{
  public $code;
  public $country;
  public $locality;
  public $pobox;
  public $region;
  public $street;

  public function setCode($code)
  {
    $this->code = $code;
  }

  public function getCode()
  {
    return $this->code;
  }

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setLocality($locality)
  {
    $this->locality = $locality;
  }

  public function getLocality()
  {
    return $this->locality;
  }

  public function setPobox($pobox)
  {
    $this->pobox = $pobox;
  }

  public function getPobox()
  {
    return $this->pobox;
  }

  public function setRegion($region)
  {
    $this->region = $region;
  }

  public function getRegion()
  {
    return $this->region;
  }

  public function setStreet($street)
  {
    $this->street = $street;
  }

  public function getStreet()
  {
    return $this->street;
  }
}
