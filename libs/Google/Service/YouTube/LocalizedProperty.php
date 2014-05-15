<?php 
namespace Google\Service\YouTube;
class LocalizedProperty extends \Google\Collection
{
  public $default;
  protected $localizedType = 'Google\Service\YouTube\LocalizedString';
  protected $localizedDataType = 'array';

  public function setDefault($default)
  {
    $this->default = $default;
  }

  public function getDefault()
  {
    return $this->default;
  }

  public function setLocalized($localized)
  {
    $this->localized = $localized;
  }

  public function getLocalized()
  {
    return $this->localized;
  }
}
