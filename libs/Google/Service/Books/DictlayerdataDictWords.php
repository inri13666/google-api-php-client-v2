<?php 
namespace Google\Service\Books;
class DictlayerdataDictWords extends \Google\Collection
{
  protected $derivativesType = 'Google\Service\Books\DictlayerdataDictWordsDerivatives';
  protected $derivativesDataType = 'array';
  protected $examplesType = 'Google\Service\Books\DictlayerdataDictWordsExamples';
  protected $examplesDataType = 'array';
  protected $sensesType = 'Google\Service\Books\DictlayerdataDictWordsSenses';
  protected $sensesDataType = 'array';
  protected $sourceType = 'Google\Service\Books\DictlayerdataDictWordsSource';
  protected $sourceDataType = '';

  public function setDerivatives($derivatives)
  {
    $this->derivatives = $derivatives;
  }

  public function getDerivatives()
  {
    return $this->derivatives;
  }

  public function setExamples($examples)
  {
    $this->examples = $examples;
  }

  public function getExamples()
  {
    return $this->examples;
  }

  public function setSenses($senses)
  {
    $this->senses = $senses;
  }

  public function getSenses()
  {
    return $this->senses;
  }

  public function setSource(\Google\Service\Books\DictlayerdataDictWordsSource $source)
  {
    $this->source = $source;
  }

  public function getSource()
  {
    return $this->source;
  }
}
