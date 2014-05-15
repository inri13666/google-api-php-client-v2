<?php 
namespace Google\Service\AdSenseHost;
class AdUnitMobileContentAdsSettings extends \Google\Model
{
  public $markupLanguage;
  public $scriptingLanguage;
  public $size;
  public $type;

  public function setMarkupLanguage($markupLanguage)
  {
    $this->markupLanguage = $markupLanguage;
  }

  public function getMarkupLanguage()
  {
    return $this->markupLanguage;
  }

  public function setScriptingLanguage($scriptingLanguage)
  {
    $this->scriptingLanguage = $scriptingLanguage;
  }

  public function getScriptingLanguage()
  {
    return $this->scriptingLanguage;
  }

  public function setSize($size)
  {
    $this->size = $size;
  }

  public function getSize()
  {
    return $this->size;
  }

  public function setType($type)
  {
    $this->type = $type;
  }

  public function getType()
  {
    return $this->type;
  }
}
