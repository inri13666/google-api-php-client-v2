<?php 
namespace Google\Service\Translate;
class TranslationsListResponse extends \Google\Collection
{
  protected $translationsType = 'Google\Service\Translate\TranslationsResource';
  protected $translationsDataType = 'array';

  public function setTranslations($translations)
  {
    $this->translations = $translations;
  }

  public function getTranslations()
  {
    return $this->translations;
  }
}
