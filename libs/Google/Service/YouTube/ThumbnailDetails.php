<?php 
namespace Google\Service\YouTube;
class ThumbnailDetails extends \Google\Model
{
  protected $defaultType = 'Google\Service\YouTube\Thumbnail';
  protected $defaultDataType = '';
  protected $highType = 'Google\Service\YouTube\Thumbnail';
  protected $highDataType = '';
  protected $maxresType = 'Google\Service\YouTube\Thumbnail';
  protected $maxresDataType = '';
  protected $mediumType = 'Google\Service\YouTube\Thumbnail';
  protected $mediumDataType = '';
  protected $standardType = 'Google\Service\YouTube\Thumbnail';
  protected $standardDataType = '';

  public function setDefault(\Google\Service\YouTube\Thumbnail $default)
  {
    $this->default = $default;
  }

  public function getDefault()
  {
    return $this->default;
  }

  public function setHigh(\Google\Service\YouTube\Thumbnail $high)
  {
    $this->high = $high;
  }

  public function getHigh()
  {
    return $this->high;
  }

  public function setMaxres(\Google\Service\YouTube\Thumbnail $maxres)
  {
    $this->maxres = $maxres;
  }

  public function getMaxres()
  {
    return $this->maxres;
  }

  public function setMedium(\Google\Service\YouTube\Thumbnail $medium)
  {
    $this->medium = $medium;
  }

  public function getMedium()
  {
    return $this->medium;
  }

  public function setStandard(\Google\Service\YouTube\Thumbnail $standard)
  {
    $this->standard = $standard;
  }

  public function getStandard()
  {
    return $this->standard;
  }
}
