<?php 
namespace Google\Service\Books;
class DictlayerdataDictWordsSensesDefinitionsExamples extends \Google\Model
{
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictWordsSensesDefinitionsExamplesSource';
  protected $sourceDataType = '';
  public $text;

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsSensesDefinitionsExamplesSource $source)
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
