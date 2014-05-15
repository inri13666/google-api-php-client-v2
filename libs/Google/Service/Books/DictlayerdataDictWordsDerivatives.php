<?php 
namespace Google\Service\Books;
class DictlayerdataDictWordsDerivatives extends \Google\Model
{
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictWordsDerivativesSource';
  protected $sourceDataType = '';
  public $text;

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsDerivativesSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setText($text)
  {
    $this->text = $text;
  }

  public function getText()
  {
    return $this->text;
  }
}
