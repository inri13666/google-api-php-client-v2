<?php 
namespace Google\Service\Urlshortener;
class AnalyticsSnapshot extends \Google\Collection
{
  protected $browsersType = 'Google\Service\Urlshortener\StringCount';
  protected $browsersDataType = 'array';
  protected $countriesType = 'Google\Service\Urlshortener\StringCount';
  protected $countriesDataType = 'array';
  public $longUrlClicks;
  protected $platformsType = 'Google\Service\Urlshortener\StringCount';
  protected $platformsDataType = 'array';
  protected $referrersType = 'Google\Service\Urlshortener\StringCount';
  protected $referrersDataType = 'array';
  public $shortUrlClicks;

  public function setBrowsers($browsers)
  {
    $this->browsers = $browsers;
  }

  public function getBrowsers()
  {
    return $this->browsers;
  }

  public function setCountries($countries)
  {
    $this->countries = $countries;
  }

  public function getCountries()
  {
    return $this->countries;
  }

  public function setLongUrlClicks($longUrlClicks)
  {
    $this->longUrlClicks = $longUrlClicks;
  }

  public function getLongUrlClicks()
  {
    return $this->longUrlClicks;
  }

  public function setPlatforms($platforms)
  {
    $this->platforms = $platforms;
  }

  public function getPlatforms()
  {
    return $this->platforms;
  }

  public function setReferrers($referrers)
  {
    $this->referrers = $referrers;
  }

  public function getReferrers()
  {
    return $this->referrers;
  }

  public function setShortUrlClicks($shortUrlClicks)
  {
    $this->shortUrlClicks = $shortUrlClicks;
  }

  public function getShortUrlClicks()
  {
    return $this->shortUrlClicks;
  }
}
