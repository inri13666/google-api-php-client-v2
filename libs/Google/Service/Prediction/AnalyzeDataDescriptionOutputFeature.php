<?php 
namespace Google\Service\Prediction;
class AnalyzeDataDescriptionOutputFeature extends \Google\Collection
{
  protected $numericType = 'Google\Service\Prediction\AnalyzeDataDescriptionOutputFeatureNumeric';
  protected $numericDataType = '';
  protected $textType = 'Google\Service\Prediction\AnalyzeDataDescriptionOutputFeatureText';
  protected $textDataType = 'array';

  public function setNumeric(\Google\Service\Prediction\AnalyzeDataDescriptionOutputFeatureNumeric $numeric)
  {
    $this->numeric = $numeric;
  }

  public function getNumeric()
  {
    return $this->numeric;
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
