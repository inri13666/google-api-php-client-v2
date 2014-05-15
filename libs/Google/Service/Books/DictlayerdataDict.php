<?php 
namespace Google\Service\Books;
class DictlayerdataDict extends \Google\Collection
{
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictSource';
  protected $sourceDataType = '';
  protected $wordsType = 'Google\Service\Books\DictlayerdataDictWords';
  protected $wordsDataType = 'array';

  public function setSource(\Google\Service\Books\DictlayerdataDictSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }

  public function setWords($words)
  {
    $this->words = $words;
  }

  public function getWords()
  {
    return $this->words;
  }
}
