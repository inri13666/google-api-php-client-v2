<?php 
namespace Google\Service\Books;
class DictlayerdataDictWordsExamples extends \Google\Model
{
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictWordsExamplesSource';
  protected $sourceDataType = '';
  public $text;

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsExamplesSource $source)
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
