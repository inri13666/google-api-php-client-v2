<?php 
namespace Google\Service\Blogger;
class UserLocale extends \Google\Model
{
  public $country;
  public $language;
  public $variant;

  public function setCountry($country)
  {
    $this->country = $country;
  }

  public function getCountry()
  {
    return $this->country;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }

  public function setVariant($variant)
  {
    $this->variant = $variant;
  }

  public function getVariant()
  {
    return $this->variant;
  }
}
