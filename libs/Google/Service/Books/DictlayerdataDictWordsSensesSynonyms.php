<?php 
namespace Google\Service\Books;
class DictlayerdataDictWordsSensesSynonyms extends \Google\Model
{
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictWordsSensesSynonymsSource';
  protected $sourceDataType = '';
  public $text;

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsSensesSynonymsSource $source)
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
