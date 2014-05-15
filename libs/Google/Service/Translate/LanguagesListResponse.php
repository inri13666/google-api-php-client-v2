<?php 
namespace Google\Service\Translate;
class LanguagesListResponse extends \Google\Collection
{
  protected $languagesType = 'Google\Service\Translate\LanguagesResource';
  protected $languagesDataType = 'array';

  public function setLanguages($languages)
  {
    $this->languages = $languages;
  }

  public function getLanguages()
  {
    return $this->languages;
  }
}
