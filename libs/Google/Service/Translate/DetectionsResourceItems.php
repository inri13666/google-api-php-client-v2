<?php 
namespace Google\Service\Translate;
class DetectionsResourceItems extends \Google\Model
{
  public $confidence;
  public $isReliable;
  public $language;

  public function setConfidence($confidence)
  {
    $this->confidence = $confidence;
  }

  public function getConfidence()
  {
    return $this->confidence;
  }

  public function setIsReliable($isReliable)
  {
    $this->isReliable = $isReliable;
  }

  public function getIsReliable()
  {
    return $this->isReliable;
  }

  public function setLanguage($language)
  {
    $this->language = $language;
  }

  public function getLanguage()
  {
    return $this->language;
  }
}
