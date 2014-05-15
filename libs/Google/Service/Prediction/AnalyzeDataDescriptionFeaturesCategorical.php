<?php 
namespace Google\Service\Prediction;
class AnalyzeDataDescriptionFeaturesCategorical extends \Google\Collection
{
  public $count;
  protected $valuesType = 'Google\Service\Prediction\AnalyzeDataDescriptionFeaturesCategoricalValues';
  protected $valuesDataType = 'array';

  public function setCount($count)
  {
    $this->count = $count;
  }

  public function getCount()
  {
    return $this->count;
  }

  public function setValues($values)
  {
    $this->values = $values;
  }

  public function getValues()
  {
    return $this->values;
  }
}
