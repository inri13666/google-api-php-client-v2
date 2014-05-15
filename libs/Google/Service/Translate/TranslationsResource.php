<?php 
namespace Google\Service\Translate;
class TranslationsResource extends \Google\Model
{
  public $detectedSourceLanguage;
  public $translatedText;

  public function setDetectedSourceLanguage($detectedSourceLanguage)
  {
    $this->detectedSourceLanguage = $detectedSourceLanguage;
  }

  public function getDetectedSourceLanguage()
  {
    return $this->detectedSourceLanguage;
  }

  public function setTranslatedText($translatedText)
  {
    $this->translatedText = $translatedText;
  }

  public function getTranslatedText()
  {
    return $this->translatedText;
  }
}
