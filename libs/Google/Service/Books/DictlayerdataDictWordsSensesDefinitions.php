<?php 
namespace Google\Service\Books;
class DictlayerdataDictWordsSensesDefinitions extends \Google\Collection
{
  public $definition;
  protected $examplesType = 'Google\Service\Books\DictlayerdataDictWordsSensesDefinitionsExamples';
  protected $examplesDataType = 'array';

  public function setDefinition($definition)
  {
    $this->definition = $definition;
  }

  public function getDefinition()
  {
    return $this->definition;
  }

  public function setExamples($examples)
  {
    $this->examples = $examples;
  }

  public function getExamples()
  {
    return $this->examples;
  }
}
